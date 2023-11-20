from pathlib import Path
from typing import Iterable

import scrapy
from scrapy import Request
from AHscrapper.items import DiseaseItem  # Make sure it's DiseaseItem, not Diseaseitem

class AnimalSpider(scrapy.Spider):
    name = "disease"

    def start_requests(self):
        base_url = "https://www.woah.org/en/what-we-do/animal-health-and-welfare/animal-diseases/?_paged={}"
        for page_number in range(1, 15):  # Pages 1 to 14
            url = base_url.format(page_number)
            yield scrapy.Request(url=url, callback=self.parse)

    def parse(self, response):
        cardsz = response.xpath("//ul[@class=\"cards cards--grid facetwp-template\"]")

        for card in cardsz.xpath("li"):
            url = card.xpath("div/div[@class=\"cards__header\"]/h3/a/@href").get()
            name = card.xpath("div/div[@class=\"cards__header\"]/h3/a/text()").get()
            affected_animals = card.xpath("div/div[@class=\"cards__infos\"]/div/span[@class=\"cards__infos-item-value\"]/text()").getall()

            yield response.follow(url=url, callback=self.parse_disease, meta={'name': name, 'affected_animals': affected_animals})

    def parse_disease(self, response):
        disease_item = DiseaseItem()
        disease_item['name'] = response.meta['name']
        disease_item['info'] = response.css('div.hero__description > p::text').getall()
        disease_item['affected_animals'] = response.meta['affected_animals']

        yield disease_item
