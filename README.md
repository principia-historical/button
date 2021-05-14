# The Button
All code related to the "The Button" level.

## Server notes
This is tightly coupled with principia-web. It reuses principia-web's MySQL code, connects to principia-web's database and keeps track of button presses with a `button` table in the principia-web database. (see `dump.sql` in this repo)

The `press.php` file here is the main entrypoint that the in-game code uses for communicating with the server.

## In-game notes
For the level itself, this specific Luascript code was used for communicating with the server-side code.

```lua
function step(count)
	if this:read(0) == 1 then
		c = assert(socket.connect("[SERVER ADRESS HERE]", 80))
		c:send("GET /button/press.php HTTP/1.0\r\n\r\n")
		s = c:receive()
		game:message("Click!")
	end
end
```

This code sends a request whenever IN0 is 1 for the Lua Script. In the "The Button" level, it was wired up to a receiver from the cursor finder that was sent through a sparsifier.
