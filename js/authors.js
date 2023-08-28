$(()=>{
    $("p#par1").hide()
    $("input#btn12").hide()
    $("input#btn1").on('click',()=>{
        $('p#par1').show(500);
        $("input#btn1").hide(500)
        $("input#btn12").show(1000)
    })
    $("input#btn12").on('click', ()=>{
        $('p#par1').hide(500);
        $("input#btn1").show(1000)
        $("input#btn12").hide(500)
    })

    $("p#par2").hide()
    $("input#btn22").hide()
    $("input#btn2").on('click',()=>{
        $('p#par2').show(500);
        $("input#btn2").hide(500)
        $("input#btn22").show(1000)
    })
    $("input#btn22").on('click', ()=>{
        $('p#par2').hide(500);
        $("input#btn2").show(1000)
        $("input#btn22").hide(500)
    })
    $("p#par3").hide()
    $("input#btn32").hide()
    $("input#btn3").on('click',()=>{
        $('p#par3').show(500);
        $("input#btn3").hide(500)
        $("input#btn32").show(1000)
    })
    $("input#btn32").on('click', ()=>{
        $('p#par3').hide(500);
        $("input#btn3").show(1000)
        $("input#btn32").hide(500)
    })
    $("p#par4").hide()
    $("input#btn42").hide()
    $("input#btn4").on('click',()=>{
        $('p#par4').show(500);
        $("input#btn4").hide(500)
        $("input#btn42").show(1000)
    })
    $("input#btn42").on('click', ()=>{
        $('p#par4').hide(500);
        $("input#btn4").show(1000)
        $("input#btn42").hide(500)
    })
    $("p#par5").hide()
    $("input#btn52").hide()
    $("input#btn5").on('click',()=>{
        $('p#par5').show(500);
        $("input#btn5").hide(500)
        $("input#btn52").show(1000)
    })
    $("input#btn52").on('click', ()=>{
        $('p#par5').hide(500);
        $("input#btn5").show(1000)
        $("input#btn52").hide(500)
    })

    

})