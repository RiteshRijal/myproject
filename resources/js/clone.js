<script type="text/javascript">
    function addCategory()
    {
        $('.categorydiv').clone().find('input').val('').end().appendTo('#morecategory');
    }
    function removeproduct()
    {
        $('#morecategory.categorydiv').last().remove();
    }
</script>
