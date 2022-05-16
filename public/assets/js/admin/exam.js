$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#import").click(function(){
        $('#myModal').modal('show');
    });

    // function updateTextArea() {
    //     var allVals = [];
    //     $('#c_b :checked').each(function() {
    //         allVals.push($(this).val());
    //     });
    //     $('#selected_values').val(allVals);
    //     console.log(allVals);
    // }

    // $('#c_b input').click(updateTextArea);
    // updateTextArea();

    $("#save").click(function(){
        $.ajax({
            type: "POST",
            url: '/stores',
            data: $('form').serialize(),
            success: function (data) {
                console.log(data);
                var rows=$.parseJSON(data);
             console.log(rows.datas.course);
             $('#myModal').modal('hide');
            $('#course-name').html('Course :'+rows.datas.course);
            var datas = rows.datas.questions;
            var element = "";
            datas.forEach(function (rows, index, datas) {
                element +=
            //  'qustion:<div>'+rows.question+'</div> Answer:'+ rows.answer+'';
             '<div class="question bg-white p-3 border-bottom" ><div class="d-flex flex-row align-items-center question-title"> <h3 class="text-danger">Q.</h3> <h5 class="mt-1 ml-2" >' + rows.question + '</h5> </div><div class="ans ml-2" ><p> answer : ' + rows.answer + '</p>  </div> </div>';

            });

              $('#question').append(element);


            //  $('#question').val(data.question);
            //  $('#answer').val(data.answer);
                // if(data) {
                //     $('.success').text(data.success);
                //     $("#ajaxform")[0].reset();
                //   }
                },
                error: function(error) {
                 console.log(error);
                }

        });
    });



});
