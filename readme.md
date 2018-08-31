Urlify
======

PHP function for creating a useable url out of a plain text string.

This is useful for automatically created urls, such as a users profile, which could be generated simply using their name, removing the need to 
save near-redundant slug-urls in your databases.


Usage
-----

```
include_once"function.php";
echo urlify($string, $delimiter, $suffix);
```

The fuction takes in three values. 

1. The first is a string and is the only required value. This is what you would assign to the username. This value can also be provided as an 
array for deeper routing. So "example.com/user/username/" could be sent as ["user", "username"]. 
2. The second value is the delimiter, the character that will take place of spaces in the url. By default it's a hyphen - but you can use 
whatever you prefer, even an empty string if you like no delimiter. Just as before, this value can be provided as an array, which will loop 
around switching between the different options provided. For example: urlify(["user name"], ["general settings"], ["+", "_"]) would return 
/user+name/general_settings.
3. The final one is the suffix. This is a string that will be appended to the end of the final url with the (next) delimiter separating it from 
the rest of the text. This would be for if you wanted your urls to read something like "/jane-doe-default" and "/jane-doe-premium".


Dontate
-------

If you found this project useful, please consider donating a little something as a thank you for the work :)

[PayPal](https://paypal.me/sammurphey) · [Venmo](https://venmo.com/sammurphey) · [KoFi](https://kofi.com/sammurphey)

