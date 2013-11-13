<?php 
/**
     * Challenge # [Easy] (Get the URL)
     *
     * @author: Matt Schutz
     * @date:   4/28/2013
     * @desc:   Website URLs, or Uniform Resource Locators, sometimes embed important 
     * data or arguments to be used by the server. This entire string, which is a URL 
     * with a Query String at the end, is used to "GET#Request_methods)" data from a web server.
	 * A classic example are URLs that declare which page or service you want to access. 
	 * The Wikipedia log-in URL is the following:
	 * http://en.wikipedia.org/w/index.php?title=Special:UserLogin&returnto=Main+Page
	 * Note how the URL has the Query String "?title=..", where the value "title" is "Special:UserLogin" and "returnto" is "Main+Page"?
	 * Your goal is to, given a website URL, validate if the URL is well-formed, and if so, print a simple list of the key-value pairs! Note that URLs only allow specific characters (listed here) and that a Query String must always be of the form "<base-URL>[?key1=value1[&key2=value2[etc...]]]"
     * 			
     * @url:    http://www.reddit.com/r/dailyprogrammer/Easy/GetThatUrl/GetThatURL.html  
     */

function url_validator($url)
{
	$return = '';

	if (filter_var($url, FILTER_VALIDATE_URL))
	{
		$parts = parse_url($url);
        parse_str($parts['query'], $str);

        foreach($str as $key => $v) {
            $return .= "$key: $v\n";
        }

    }
     else
     {
     	echo "Invalid URL\n";
     }
	echo $return;
}

$broken_url = "http://en.wikipedia.org/w/index.php?title= hello world!&action=é";
url_validator($broken_url);
$good_url = "http://en.wikipedia.org/w/index.php?title=Main_Page&action=edit";
url_validator($good_url);

