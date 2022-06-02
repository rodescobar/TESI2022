// Variaveis globais
var iniciado = true
var velocidade = 1
var p_velocidade = 10

var tecla = {
    W: 87,
    S: 83,
    A: 65,
    D: 68,
    T: 32
}

var jogo = {}
jogo.pressionou = []

$(document).keydown(function(e){
    jogo.pressionou[e.which] = true;
});

$(document).keyup(function(e){
    jogo.pressionou[e.which] = false;
});

$(document).keydown( function (e) {
    if ( e.which == 32 ) {
        if ( $('#player_tiro').length < 1 ) {
            $("#area_jogo").append('<div id="player_tiro"></div>')

            var p_top = parseInt($("#player").css("top"))
            var p_left = parseInt($("#player").css("left"))

            $('#player_tiro').css("top", p_top - 30 )
            $('#player_tiro').css("left", p_left + 90 )
        }
    }
} )

function MovimentaPlayerTiro()
{
    if ( $('#player_tiro').length > 0 ) {
        var left = parseInt($("#player_tiro").css("left"))

        if ( left <= 630 )
            $("#player_tiro").css("left", left + 15 )
        else if ( left >= 630 )
            $("#player_tiro").remove()
    }
}

function MovimentaPlayer() {   
    if ( jogo.pressionou[tecla.W] )
    {
        var top = parseInt($('#player').css('top'))

        if ( top <= 10 )
            $('#player').css('top', top)
        else
            $('#player').css('top', top - p_velocidade)
    }

    if ( jogo.pressionou[tecla.S] )
    {
        var top = parseInt($('#player').css('top'))

        if ( top <= 280)
            $('#player').css('top', top + p_velocidade)
    }

    if ( jogo.pressionou[tecla.A] )
    {
        var left = parseInt($('#player').css('left'))
        if ( left >= 10)
            $('#player').css('left', left - p_velocidade)
    }

    if ( jogo.pressionou[tecla.D] )
    {
        var left = parseInt($('#player').css('left'))
        if ( left <= 560 )
        $('#player').css('left', left + p_velocidade)
    }

}

function GameEngine() 
{
    MovimentaCenario()
    MovimentaPlayer()
    MovimentaPlayerTiro()
}

function MovimentaCenario() 
{
    if (iniciado) 
    {
        var left = parseInt($('#area_jogo').css('background-position'))

        $('#area_jogo').css('background-position', left - velocidade)
    }
}



setInterval(
    GameEngine,
    30
)