<style>
    /*.my-col div[class~="col"]{*/
    /*border:solid 1px;*/
    /*}*/

    div[class*="col-"] {
        /*border-bottom:solid 1px;*/
    }
    .date {
        /*background-color:dodgerblue;*/
        /*color:white;*/
    }
    .bordered:first-child {
        border-top:3px solid gray;
    }
    .bordered:last-child {
        border-bottom:3px solid gray;
    }
    .bordered{
        border-bottom:1px solid gray;
        border-left:1px solid gray;
    }
    /*x-small*/
    @media (max-width:575px){
        .date-title {
            background-color:dodgerblue;
            color:white;
        }

        .sm-or-less{
            /*display:unset;*/
        }
        .md-or-more{
            display:none;
        }

    }


    /* small */
    @media (min-width:576px) and (max-width:767px){
        .date-title {
            background-color:dodgerblue;
            color:white;
        }

        .sm-or-less{
            /*display:unset;*/
        }

        .md-or-more{
            display:none;
        }
    }

    /* medium */
    @media (min-width:768px) and (max-width:991px){
        .sm-or-less{
            display:none;
        }
    }
    /* large */
    @media (min-width:992px) and (max-width:1199px){
        .sm-or-less{
            display:none;
        }
    }
    /* x-large */
    @media (min-width:1200px){
        .sm-or-less{
            display:none;
        }
    }


</style>

<h1>每日一句</h1>



<div class="my-col">
    <div class="row md-or-more bordered">
        <div class="col-2">
            日期
        </div>
        <div class="col-4">
            日文
        </div>
        <div class="col-4">
            中文
        </div>
        <div class="col-2">
            操作
        </div>
    </div>
<?php
foreach ($sentenceList as $sentence) {
?>
    <div class="row bordered">
        <div class="col-md-2 col-12 date-title">
            <?php echo $sentence->created_date->format('m月d日')?>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-2 sm-or-less">JP</div>
                <div class="col-10">
                    <a class="example-popover" href="#" data-trigger="focus" data-toggle="popover" title="读音提示" data-content="<?php echo empty($sentence->jp_kana)?"无":$sentence->jp_kana; ?>"><?php echo $sentence->jp ?></a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-2 sm-or-less">CN</div>
                <div class="col-10"><?php echo $sentence->cn ?></div>
            </div>
        </div>
        <div class="col-md-2 col-sm-12">
            <div class="row">
                <div class="col-2 sm-or-less">操作</div>
                <div class="col-10">
                    <a href="<?php echo $sentence->cn ?>" data-action="add">加入生句本</a>
                </div>
            </div>
        </div>

    </div>

    <?php
}
?>
</div>

<script>
    $("[data-action=add]").click(function(){
        alert("功能还没做");
        return false;
    });
    // 显示读音
    $(document).on("click", ".example-popover", function(){

    	return false;
    });


	$(function () {
		$('.example-popover').popover({
			container: 'body',
			trigger: 'focus'
		})
	})
</script>
