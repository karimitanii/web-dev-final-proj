<?php
function ScriptAdd(){
?>
    <script>
        function addItem() {
            var mform=document.querySelector("form[name='addItem']");
            var id=mform.elements["Id"].value;
            var name=mform.elements["plateName"].value;
            var desc=mform.elements["description"].value;
            mform.submit();
        }

        function resetForm() {
            var mform=document.querySelector("form[name='addItem']");
            mform.elements["Id"]="";
            mform.elements["plateName"]="";
            mfrom.elements["description"]="";
        }
    </script>
<?php
}
?>