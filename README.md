# br0w
Hack The Br0w | Play your browser and learn more, hack fun !!

![Screenshoot](https://media2.giphy.com/media/DUCJBTChj8WfQqeeKl/giphy.gif)

The Br0w is a simple web to learn about and about web security with a browser as a tool that sometimes people forget about more benefits. Maybe it's more like Capture The Flag (CTF).
One of the challenges is, disable css and base64 encoding decoding via the console, Play more at https://labs.tegalsec.org/br0w/

### List of Chall :
<pre>
~ Chall 1 | User-Agent
~ Chall 2 | POST Data
~ Chall 3 | Cookie
~ Chall 4 | LocalStorage
~ Chall 5 | Eksternal CSS (Console)
~ Chall 6 | Internal CSS (Console)
~ Chall 7 | Inline CSS (Console)
~ Chall 8 | Browser Console
~ Chall 9 | Header
~ Chall 10 | Base64 (Console)
~ Chall 11 | Javascript (Console)
</pre>

### Demo Video :
![Screenshoot](https://media2.giphy.com/media/bh0AGuu5yOQfSP8gj8/giphy.gif)<br>

### Instalation :
<ul>
  <li>Run your web server (XAMPP / LAMPP)</li>
  <li>Clone the repository and put the files in the /htdocs/br0w</li>
  <li>You can akses http://localhost:8080/br0w</li>
  <li>Hack fun !!</li>
</ul>

### Deploy Manually Docker image

- Clone this repo (`git clone https://github.com/tegal1337/br0w`)
- Then run `docker build -t "br0w" .` and wait untill it's done 
- If the build is clear, run this command `docker run --name web-ctf -d -it -p 80:80 br0w`

### License

[Apache License Version 2.0](https://raw.githubusercontent.com/tegal1337/br0w/main/LICENSE)
