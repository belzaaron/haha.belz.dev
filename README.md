# Haha

A project to provide fun little hahas.

## Accreditation

Jokes taken from:

- <https://parade.com/1040121/marynliles/one-liners/>

## Documentation

Using a `GET` HTTP request to `/random` that accepts an `int` called `number` which is `optional` and defaults to `1`, will return:

```json
{
    "jokes": [
        "I heard there were a bunch of break-ins over at the car park. That is wrong on so many levels."
    ]
}
```

Obviously if you change number, it will return a corresponding amount of jokes.

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Aaron Belz at belzaaron@gmail.com. All security vulnerabilities will be promptly addressed.

## License

The project is under the [MIT license](https://opensource.org/licenses/MIT).
