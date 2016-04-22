#Urlify

PHP function for creating a useable url out of a plain text string. This can be useful for automatically created urls, for example a users account page, could be generated simply using their name.

##include_once"function.php";
##echo urlify($string,$delimiter,$suffix);

The fuction takes in three values. The first is a string and is the only required value. This is what you would assign to the username. This value can also be provided as a url if you need to account for deeper routing. So it might need to be "example.com/user/username/" and you could use an array to hold each "folder" and they would each be processed. The second value is the delimiter, the thing that will take place of spaces in the url. By default it's a hyphen - but you can use whatever you prefer, even an empty string if you like. If you're providing multiple folders in an array format as mentioned above, you can also use an array for the delimiter. If for whatever reason one area of your site has a different naming convention, you're still covered. The final one is the suffix. This is a string that will be appended to the end of the final url with the delimiter separating it from the rest of the text. This would be for if you wanted your urls to read "/jane-doe-default" and "/jane-doe-premium".
