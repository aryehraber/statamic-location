# Location

**Find a location using Google Maps autocomplete.**

This fieldtype will suggest addresses as you type. Granted the address is successfully found by Google, it will save the full address name, latitude and longitude to the page/entry.

![location](https://cloud.githubusercontent.com/assets/5065331/19094627/4f83bec4-8a91-11e6-8d3c-2207c6f71ffc.gif)

## Usage

**Setup:**

Firstly, copy the entire `Location` folder into `site/addons/`.

Then grab an API Key from Google: http://console.developers.google.com.

Finally, add it to Location's settings (CP > Configure > Addons > Location).

**Usage:**

```
fields:
  address:
    type: location
    display: Store Address
```

**Output:**

```
address:
  name: Newport Beach, CA, USA
  latitude: 33.6189101
  longitude: '-117.9289469'
```

**A big thank you to [Erin Dalzell](https://github.com/edalzell) who actually did most of the work!**