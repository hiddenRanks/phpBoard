$(document).ready(function() {
    $("#content").on("keyup", function() {
        window.setInterval("updateInputCount()", 100);
    });
});

function updateInputCount() {
    var textLength = $("#content").val().length;
    var byteCnt = 0;
    var forIE = false; //IE는 가끔 한글이 전부 지워짐
    
    //console.log(textLength);
    for(var i = 0; i < textLength; i++) {
        var charTemp = $("#content").val().charAt(i);

        //한글일 경우
        if(escape(charTemp).length > 4) {
            byteCnt += 2;
            forIE = true;
        } else { //아닐 경우
            byteCnt += 1;
            forIE = false;
        }
    }

    if(byteCnt > 2000) {
        if(forIE) {
            alert("최대 1000글자까지 사용 가능합니다.");
            $("#content").val($("#content").val().substr(0, textLength - 1));
        } else {
            $("#content").val($("#content").val().substr(0, textLength - 1));
        }
    }
    $(".byteCheck").text(byteCnt);
}