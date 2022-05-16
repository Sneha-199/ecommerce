
$(function () {
    //  alert($('meta[name="csrf-token"]').attr('content'))
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on("click", "#loadquestion", function () {
        $('#question').html("");
        var course_id = $("#course").val();
        $.ajax({
            type: "POST",
            url: '/getquiz',
            data: { course_id: course_id },
            success: function (data) {
                // console.log(data);
                var rows = $.parseJSON(data);
                // console.log(rows.datas.questions);
                var datas = rows.datas.questions;
                $('#datas').val(datas);
                var element = "";
                datas.forEach(function (rows, index, datas) {
                    //console.log(rows.question.id);

                    $("#q_array").after(
                        "<input type='hidden' name='item_name[]'  class='qustion_array'  value="+rows.question.id+" />"
                    );
                    element +=
                        '<div class="question bg-white p-3 border-bottom" id="selected"><div class="d-flex flex-row align-items-center question-title"> <h3 class="text-danger">Q.</h3> <h5 class="mt-1 ml-2" >' + rows.question.question + '</h5> </div><div class="ans ml-2" ><label class="checkbox"><input type="checkbox" id="choice1" value="'+rows.question.choice1+'" name="choice" ><span> ' + rows.question.choice1 + '</span> </label> </div><div class="ans ml-2"><label class="checkbox"><input type="checkbox" id="choice2" value="'+rows.question.choice2+'" name="choice" ><span> ' + rows.question.choice2 + '</span></label></div><div class="ans ml-2"> <label class="checkbox"><input type="checkbox" id="choice3" value="'+rows.question.choice3+'" name="choice" ><span> ' + rows.question.choice3 + '</span> </label></div><div class="ans ml-2"><label class="checkbox"> <input type="checkbox" id="choice4" value="'+rows.question.choice4+'" name="choice"><span>  ' + rows.question.choice4 + '</span>  </label>  </div> </div>';
                });
                element += '<br><div class=""> <button type="button" id="get" name="load" class="btn btn-primary font-weight-bold mr-2">Submit Exam</button> </div>';
                $('#question').append(element);
            }
        });

    });

$(document).on("click", "#get", function () {
    var row = {};
    //var datas= $('.qustion_array').val();
    var datas = $("input[name='item_name[]']")
              .map(function(){return $(this).val();}).get();
   //console.log(datas);
    var selected = new Array();
    // alert('que')
    $("#selected input[type=checkbox]:checked").each(function () {
        // console.log(datas);
        selected.push(this.value);
        // alert(this.value)
    });


    for (let i = 0; i < datas.length; i++) {
        row[datas[i]] = selected[i];
    }

    console.log(row);


    $.ajax({
        type: "POST",
        url: '/getresult',
        data: { question:row },

        success: function (data) {
            swal({
                         title: "Thankyou!",
                         text: "successfully completed.",
                         type: "success",
                        },
            // else{
                function(){
                    location.reload();
                }
            // //    console.log(error);
            // }
            // window.location.reload();
            );
        }
    });

 });

//  return false;
});

//  $(document).on('click', 'input[type="checkbox"]', function() {
//     $('input[type="checkbox"]').not(this).prop('checked', false);
// });
