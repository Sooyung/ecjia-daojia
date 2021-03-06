<div class="row">
    <div class="col-lg-12">
        <div class="fileupload" data-type="image" data-action="{$form_action}{if $smarty.get.material}&material=1{/if}"></div>
    </div>
</div>
<div class="row-fluid goods-photo-list{if !$lists.item} hide{/if}">
    <div class="span12">
        <div class="wmk_grid ecj-wookmark wookmark_list other_material">
            <ul class="wookmark-goods-photo move-mod nomove">
                <!-- {foreach from=$lists.item item=val} -->
                <li class="thumbnail move-mod-group">
                    <div class="attachment-preview">
                        <div class="ecj-thumbnail">
                            <div class="centered">
                                <a target="_blank" href="{$val.file}" title="{$val.file_name}">
                                    <img src="{$val.file}" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <p>
                        <a href="javascript:;" title='{t domain="wechat"}取消{/t}' data-toggle="sort-cancel" style="display:none;"><i class="fa fa-times"></i></a>
                        <a href="javascript:;" title='{t domain="wechat"}保存{/t}' data-toggle="sort-ok" data-imgid="{$val.id}" data-saveurl="{url path='wechat/platform_material/edit_file_name' args='type=thumb'}" style="display:none;"><i class="fa fa-check"></i></a>
                        <a class="ajaxremove" data-imgid="{$val.id}" data-toggle="ajaxremove" data-msg='{t domain="wechat"}您确定要删除该图片素材吗？{/t}' href='{url path="wechat/platform_material/thumb_remove" args="id={$val.id}"}' title='{t domain="wechat"}删除{/t}'><i class="ft-trash-2"></i></a>
                        <a href="javascript:;" title='{t domain="wechat"}编辑{/t}' data-toggle="edit"><i class="ft-edit-2"></i></a>
                        <span class="edit_title">{if $val.file_name}{$val.file_name}{else}{t domain="wechat"}无标题{/t}{/if}</span>
                    </p>
                </li>
                <!-- {/foreach} -->
            </ul>
        </div>
        <!-- {$lists.page} -->
    </div>
</div>