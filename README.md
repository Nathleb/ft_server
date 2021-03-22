## ft_server


# Build :
```bash
 docker build -t name . 
 ```
  
 # Run :
 ```bash
 docker run  -ti -p 8080:80 -p 443:443 name 
 ```
 
 ```bash
 docker run -d --rm -ti -p 8080:80 -p 443:443 name 
 ```
 To disable Auto index
 
 ```bash
  docker run --env AUTOINDEX=off -d --rm -ti -p 8080:80 -p 443:443 name 
 ```
 or
 ```bash
 docker run --env AUTOINDEX=0 -d --rm -ti -p 8080:80 -p 443:443 name   
```
# In browser
```bash
https://localhost/
```
```bash
https://localhost/wordpress/
```
```bash
https://localhost/phpMyAdmin/
 ```
 user : wpuser
 mdp  : wpdbpassword
