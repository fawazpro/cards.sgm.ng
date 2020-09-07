let dp = $('#dp');
let downloadBtn = $('#download');
let getCanvas;

downloadBtn.on('click', function() {
    html2canvas(dp, {
        onrendered: function(canvas) {
            downloadBtn.append(canvas);
            getCanvas = canvas;
        }
    })
    console.log('btn clicked');
})

///////// Input Details

let createIMGbutton = $('#createImg');
let title = $('#title');
let content1 = $('#content1');
let content2 = $('#content2');
let titleText = $('#titleText');
let content1Text = $('#content1Text');
let content2Text = $('#content2Text');
let form = $('#details');

form.submit(function (e) { 
    e.preventDefault();

    // Collect Form Value
    let titleValue = title.val();
    let content1Value = content1.val();
    let content2Value = content2.val();

    titleText.html(titleValue);
    content1Text.html(content1Value);
    content2Text.html(content2Value);
});

