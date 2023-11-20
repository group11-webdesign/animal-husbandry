# -*- coding: utf-8 -*-

# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

import scrapy

class AhscrapperItem(scrapy.Item):
    # define the fields for your item here like:
    # name = scrapy.Field()
    pass

class DiseaseItem(scrapy.Item):  # Capitalized 'Item' here
    name = scrapy.Field()
    info = scrapy.Field()
    affected_animals = scrapy.Field()
