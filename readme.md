# cheatsheet-curl

## debug option

```bash
# simple verbose
-v
--verbose
# only ascii trace
--trace-ascii /dev/stdout
# ascii and binary trace
--trace /dev/stdout
```

## POST

### POST JSON

#### parameter

```bash
curl localhost:8000 \
    -X POST \
    -H "Content-Type: application/json" \
    -d '{"name" : "佐藤" , "mail" : "sato@example.com"}'
```

#### file

```bash
curl localhost:8000 \
    -X POST \
    -H "Content-Type: application/json" \
    -d @data.json
```

#### stdin

```bash
echo '{"name" : "佐藤" , "mail" : "sato@example.com"}' |
curl localhost:8000 -X POST -H "Content-Type: application/json" -d @-
```

### POST multipart

```bash
curl localhost:8000 \
    --trace-ascii /dev/stdout \
    -X POST \
    -F "name=佐藤" \
    -F "mail=sato@example.com"
```

### gzip encoding

```bash
gzip -c ./data.json |
curl -X POST --data-binary @- -H "Content-Encoding: gzip" -H "Content-Type: application/json" localhost:8000
```
