<button class='btn w-36 h-12 cursor-pointer relative
    after:absolute after:block after:w-full after:h-full after:rounded-sm
    after:top-0 after:left-0 after:-z-10 text-white text-xl text-gray-300 
	shadow-[0_4px_6px_-1px_rgba(0,0,0,.6)] transition-all hover:shadow-none duration-500
'>
    Logout
</button>

<style>
@property --hue {
    syntax: '<angle>';
    inherits: false;
    initial-value: 248deg;
}

@property --rotate-1 {
    syntax: '<angle>';
    inherits: false;
    initial-value: 45deg;
}

@property --rotate-2 {
    syntax: '<angle>';
    inherits: false;
    initial-value: 150deg;
}

@property --rotate-offset-1 {
    syntax: '<angle>';
    inherits: false;
    initial-value: 95deg;
}

@property --rotate-offset-2 {
    syntax: '<angle>';
    inherits: false;
    initial-value: 75deg;
}

.btn::after {
    transition: --rotate-offset-1 0.5s, --rotate-offset-2 0.5s, --rotate-1 0.5s, --rotate-2 0.5s, --hue 0.5s;
    background: conic-gradient(at 50% 0%, transparent, calc(var(--rotate-offset-1)), hsla(var(--hue), 50%, 32%, .9) calc(var(--rotate-offset-1)), hsla(var(--hue), 50%, 32%, .9) calc(var(--rotate-offset-1) + var(--rotate-1)), transparent calc(var(--rotate-offset-1) + var(--rotate-1))),
        conic-gradient(at 50% 0%, transparent, calc(var(--rotate-offset-2)), hsla(var(--hue), 50%, 44%, 1) calc(var(--rotate-offset-2)), hsla(var(--hue), 50%, 44%, 1) calc(var(--rotate-offset-2) + var(--rotate-2)), transparent calc(var(--rotate-offset-2) + var(--rotate-2))),
        linear-gradient(hsla(var(--hue), 50%, 50%, 1), hsla(var(--hue), 50%, 50%, 1))
}

/* modify values below to affect conic size with hover*/
.btn:hover::after {
    /* start angle */
    --rotate-offset-1: 140deg;
    --rotate-offset-2: 110deg;
    /* angle increase from start angle */
    --rotate-1: 110deg;
    --rotate-2: 160deg;

    --hue: 220deg;
}
</style>