# Lugocorp Website
This is the official source repo for the [LugoCorp](http://lugocorp.net) website.
This markup will walk you through development on the site.

## Development
The LugoCorp website is written in PHP, and is built using [Cairn](https://github.com/alugocp/cairn).
The `run` directory in this repo will handle building and uploading the site when you are ready to push updates.
Here is an overview of all the scripts inside the `run` directory:

- `cairn` is used internally to build the site.
- `start` spins up a development server for testing local changes on the site.
- `stop` kills the development server.
- `upload` builds the website and uploads it to the `gh-pages` branch for production.
    - `--dry-run` is an option you can use to skip the upload portion of this command.

You should run these commands from the `lugocorp` root directory, like so:
```bash
./run/<command>
```