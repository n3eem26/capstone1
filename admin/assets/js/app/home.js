function addEmoticonText(text) {
    if (document.getElementById('message').value.length >= 1000)
        return;
    var myTextArea = $('#message');
    myTextArea.val(myTextArea.val() + text);
    document.getElementById('message').focus();
    var charCount = document.getElementById('message').value.length;
    if (charCount > 1000) {
        $('#charCount').val(charCount);
    } else {
        $('#charCount').val(charCount);
    }
}


function left() {
    $('#message').css('direction', 'ltr').focus();
}
function right() {
    $('#message').css('direction', 'rtl').focus();
}



$('input[type="radio"]').click(function () {
    if ($(this).attr('id') == 'repeated') {
        $('#repeatedData').show();
        $('#delayData').hide();
        $('#nowData').hide();
    }
    else if ($(this).attr('id') == 'delay') {
        $('#repeatedData').hide();
        $('#delayData').show();
        $('#nowData').hide();
    }
    else {
        $('#delayData').hide();

        $('#repeatedData').hide();
        $('#nowData').show();
    }
});

function Lines() {
    var text = document.getElementById('others');
    var text = text.value.replace(/\s+$/g, "")
    var split = text.split("\n")
    return split.length
}


function total() {
    $('#totalCount').val(
        parseInt($('#otherCount').val()) +
        parseInt($('#contactCount').val()) +
        parseInt($('#groupCount').val())
    );
}


function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 43) {
        return true;

    } else if ((charCode > 31 && ((charCode < 48 || charCode > 57)))) {
        return false;
    }
    $('#otherCount').val(Lines());
    total();
    return true;
}

$("#sender_name").keypress(function (event) {
    var ew = event.which;

    if (48 <= ew && ew <= 57)
        return true;
    if (65 <= ew && ew <= 90)
        return true;
    if (97 <= ew && ew <= 122)
        return true;
    return false;
});









$("#unsubscribe").on("click", function () {
    if ($("#unsubscribe").is(':checked')) {
        insertAtCaret('http://lp6.me/u/##### ');
    } else {
        deleteValue('http://lp6.me/u/#####');
    }

});
$("#confirmation").on("click", function () {
    if ($("#confirmation").is(':checked')) {
        insertAtCaret('http://lp6.me/a/##### ');
    } else {
        deleteValue('http://lp6.me/a/#####');
    }

});
$("#response").on("click", function () {
    if ($("#response").is(':checked')) {
        insertAtCaret('http://lp6.me/r/##### ');
    } else {
        deleteValue('http://lp6.me/r/#####');
    }

});


$("input:file").change(function () {
    var fileName = $("input:file").val();
    if (fileName != '') {
        insertAtCaret('http://lp6.me/f/##### ');
    }
    $("button.btn.btn-default.fileinput-remove.fileinput-remove-button").click(function () {
        var fileName = $("input:file").val();
        if (fileName == '') {
            deleteValue('http://lp6.me/f/##### ');
        }
    });
    $("div.close.fileinput-remove").click(function () {
        var fileName = $("input:file").val();
        if (fileName == '') {
            deleteValue('http://lp6.me/f/##### ');
        }
    });
});







function insertAtCaret(text) {
    var txtarea = document.getElementById('message');
    if (!txtarea) {
        return;
    }

    var scrollPos = txtarea.scrollTop;
    var strPos = 0;
    var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ?
        "ff" : (document.selection ? "ie" : false ) );
    if (br == "ie") {
        txtarea.focus();
        var range = document.selection.createRange();
        range.moveStart('character', -txtarea.value.length);
        strPos = range.text.length;
    } else if (br == "ff") {
        strPos = txtarea.selectionStart;
    }

    var front = (txtarea.value).substring(0, strPos);
    var back = (txtarea.value).substring(strPos, txtarea.value.length);
    txtarea.value = front + text + back;
    strPos = strPos + text.length;
    if (br == "ie") {
        txtarea.focus();
        var ieRange = document.selection.createRange();
        ieRange.moveStart('character', -txtarea.value.length);
        ieRange.moveStart('character', strPos);
        ieRange.moveEnd('character', 0);
        ieRange.select();
    } else if (br == "ff") {
        txtarea.selectionStart = strPos;
        txtarea.selectionEnd = strPos;
        txtarea.focus();
    }

    txtarea.scrollTop = scrollPos;
    count(txtarea)
}


function deleteValue(txt) {

    var textarea = document.getElementById("message");
    textarea.value = textarea.value.replace(txt, "");
    count(textarea);
}


