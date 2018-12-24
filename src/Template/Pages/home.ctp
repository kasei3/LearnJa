<?php //= $this->Html->link("日语输入学习","/LearnJa",['class'=>'btn btn-success']);?>
<style>
    body {
        /*background:url("/img/background2.jpg") fixed center no-repeat;*/
        /*background-position: top;*/
    }
</style>
<div class="row">
    <div class="col-10" style="background-color:#FFFFFF88;min-height:700px;">
        <h1>学习日语</h1>
        <table class="table-bordered w-100 table-striped">
            <tr>
                <th style="width:30%">学习内容</th>
                <th style="width:30%;">简介</th>
                <th style="width:40%;">学习进度</th>
            </tr>
            <tr>
                <td><?= $this->Html->link("日语输入学习", "/LearnJa/typing"); ?></td>
                <td>学习如何输入日语</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0"
                             aria-valuemax="100">5%
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="3"><?= $this->Html->link("生活常用词语短句", "/LearnJa/words"); ?></td>
                <td>生活中经常用到的词语</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0"
                             aria-valuemax="100">5%
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>练习基本生活单词</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0"
                             aria-valuemax="100">10%
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>练习基本生活短语</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0"
                             aria-valuemax="100">10%
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="text-right">最后更新:2018年10月13日22:47:44</div>
        <hr>

        <h1>学习出行</h1>
        <table class="table-bordered w-100 table-striped">
            <tr>
                <th style="width:30%">学习内容</th>
                <th style="width:30%;">简介</th>
                <th style="width:40%;">学习进度</th>
            </tr>
            <tr>
                <td rowspan="1"><?= $this->Html->link("如何出去玩", "/LearnJa/words"); ?></td>
                <td>学习查找地图和乘坐公共交通</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0"
                             aria-valuemax="100">5%
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="1"><?= $this->Html->link("出门前的准备", "/LearnJa/words"); ?></td>
                <td>钥匙钱包，以外，护照（免税）在日住址信息。</td>
                <td>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0"
                             aria-valuemax="100">5%
                        </div>
                    </div>
                </td>
            </tr>
        </table>


    </div>
</div>
