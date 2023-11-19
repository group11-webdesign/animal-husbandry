import re

html_code = '<span class="cards__infos-item-value">Terrestrials<span class="separator"></span>Multiple species </span>'

# Define a regular expression pattern to match the desired text
pattern = r'<span class="cards__infos-item-value">(.*?)<span class="separator"></span>(.*?)</span>'

# Use re.search to find the pattern in the HTML code
match = re.search(pattern, html_code)

# Check if the pattern is found
if match:
    # Extract the matched text groups
    text_values = [match.group(1), match.group(2)]

    # Print the array
    print(text_values)
else:
    print("Pattern not found in the HTML code.")
