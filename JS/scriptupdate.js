
let select1 = document.getElementById('selectcomp1');
let select2 = document.getElementById('selectcomp2');
let select3 = document.getElementById('selectcomp3');
let select4 = document.getElementById('selectcomp4');

function insert(select){
    alert(select.value);
    window.location.href = "updateprofil.php?IDcomp="+select.value+"&numselect="+select.id;
    //window.location.href = "updateprofil.php#selectcomp1";
}

select1.addEventListener('change', function () { insert(this); });
select2.addEventListener('change', function () { insert(this); });
select3.addEventListener('change', function () { insert(this); });
select4.addEventListener('change', function () { insert(this); });
