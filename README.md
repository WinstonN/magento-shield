# Magento Shield #

You run a Magento Store. You want to protect this store's Frontend, or Admin, or both from hackers or search engines.
What can you do?

1. You can password protect these endpoints. 
  A password will give you an error when you try to upload images to products from the admin. It is also difficult to change and manage
2. You can put the store Admin behind a VPN. 
  This is difficult to setup, and a little difficult to manage when you just want to protect the Admin
3. You can allow access based on IP Address
  Difficult to manage and IP addresses rotate frequently, so you would have to update/change this whitelist constantly
4. You can protect the end points based on a set request header - This is where this module comes in

# What does this module do? #

This module listens to each request made to Magento Admin, Frontend or Both (configurable) and looks for a request header name (configurable via the admin) and the request header value (configurable) and if this matches, it allow the request through to Magento. If this fails it can either block the request (Send a 403) or redirect the request to a URL (configurable)

# How to send the request header #

Use a browser like chrome and the modheader extension, link below
https://chrome.google.com/webstore/detail/modheader/idgpnmonknjnojddfkpgkljpfnnfcklj?hl=en

# TODO #

Build a shell script that can enable or disable the shield

