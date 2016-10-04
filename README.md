# Location

---

**Find a location using Google Maps autocomplete.**

This fieldtype will suggest addresses as you type. Granted the address is successfully found by Google, it will save the full address name, latitude and longitude to the page/entry.


## Usage
**Setup:**
Firstly, grab an API Key from Google: http://console.developers.google.com.
Then, add it to Location's settings (CP > Configure > Addons > Location).

**Usage:**
Add the fieldtype to a fieldset:
```
title: Contact Page
fields:
  address:
    type: location
    display: Store Address
```

**Output:**
```
address:
  name: Stationsplein, 1012 AB Amsterdam, Netherlands
  latitude: 52.3791283
  longitude: '4.900272'
```

**A big thank you to [Erin Dalzell](https://github.com/edalzell) who actually did most of the work**