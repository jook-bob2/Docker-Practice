# Docker 실전 연습 예제입니다.
### Installation
<pre>
cd /home
git clone https://github.com/ehrmaks/Docker-Practice/
cd Docker-Practice
</pre>
### Run
<pre>
# Login For Private Docker Repository
docker login
docker pull ehrmaks/docker-pratice
docker run -p 80:80 -v /home/Docker-Practice/Project:/var/www/html ehrmaks/docker-pratice
</pre>
