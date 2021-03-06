<?php
defined('IN_ECJIA') or exit('No permission resources.');

/**
 * ECJIA 专题管理语言包
 */

return array(
    'tab_general'                   => '通用信息',
    'tab_desc'                      => '专题介绍',
    'tab_goods'                     => '专题商品',
    'tab_advanced'                  => '高级选项',
    'back_list'                     => '返回专题列表',
    'continue_add'                  => '继续添加专题',
    'topic_class'                   => '专题分类',
    'select_product'                => '选择商品',
    'default_class'                 => '无分类',
    'publish_to_player'             => '发布到Flash播放列表',
    'publish_to_ads'                => '发布到广告',

    /* 提示信息 */
    'succed'                        => '操作成功!',
    'notice_template_file'          => '填写当前专题的模板文件名,模板文件应上传到当前商城模板目录下,不填写将调用默认模板。',
    'notice_css'                    => '填写当前专题的CSS样式代码,不填写将调用模板默认CSS文件',

    'js_languages'                  => array(
        'topic_name_empty'     => '请输入专题名称',
        'start_time_empty'     => '请选择专题开始时间!',
        'end_time_empty'       => '请选择专题结束时间!',
        'delete_topic_confirm' => '确定删除选中项吗?',
        'sort_name_exist'      => '该分类已经存在',
        'sort_name_empty'      => '请输入分类名称',
        'move_item_confirm'    => '已选商品已经转移到\"className\"分类下',
        'item_upper_limit'     => '每个分类下的商品不能超过50个',
        'start_lt_end'         => '专题开始时间不能大于或等于结束时间',
    ),

    'invalid_type'                  => '您上传的图片格式不正确！',
    'web_url_no'                    => '远程地址错误。请填写完整的 URL 地址！',

    /* 专题信息字段 */
    'topic_id'                      => '编号',
    'topic_title'                   => '专题名称：',
    'topic_desc'                    => '专题介绍：',
    'template_file'                 => '模板文件：',
    'style_sheet'                   => '样式表：',

    'lable_topic_type'              => '图片类型',
    'lable_base_style'              => '基本风格样式：',
    'lable_title_upload'            => '商品分类标题图片：',
    'lable_topic_keywords'          => '专题页面关键字',
    'lable_topic_description'       => '专题页面描述',

    'tips_width_height'             => '此模板的图片标准宽度为：%s 标准高度为：%s',
    'tips_upload_notice'            => '上传该广告的图片文件,或者你也可以指定一个远程URL地址为广告的图片',
    'tips_title_width_height'       => '此模板的图片标准宽度为：%s 标准高度为：%s',

    'all_goods'                     => '可选商品',
    'selected_goods'                => '已选商品',
    'top_img'                       => '图片',
    'top_flash'                     => '上传Flash文件：',
    'top_html'                      => '代码内容：',
    'lable_upload'                  => '上传图片：',
    'lable_from_web'                => '或者远程URL地址',
    'lable_content'                 => '内容',

    //追加
    'select_flash'                  => '上传Flash文件',
    'select_html'                   => '代码内容',
    'topic_list'                    => '专题列表',
    'topic_add'                     => '添加专题',
    'add_succed'                    => '添加专题成功',
    'edit_succed'                   => '编辑专题成功',
    'topic_edit'                    => '编辑专题',
    'top_html_confirm'              => '代码内容不能为空',
    'delete_category_pic_succed'    => '删除商品分类标题图片成功',
    'delete_flash_succed'           => '删除Flash文件成功',
    'delete_topic_pic_succed'       => '删除专题图片成功',
    'edit_topic_name_succed'        => '编辑专题名称成功',
    'bactch_delete_succed'          => '批量删除专题操作成功',
    'delete_succed'                 => '删除专题操作成功',
    'delete_failure'                => '删除专题操作失败',
    'topic_preview'                 => '专题预览',

    'edit_topic_category'           => '编辑专题分类',
    'topic_category_name_confirm'   => '请输入专题分类名称',
    'topic_name_is'                 => '专题名称为',
    'add_topic_category_succed'     => '添加专题成功',
    'edit_topic_goods'              => '编辑专题商品',
    'edit_topic_goods_succed'       => '成功修改专题商品',
    'delete_topic_category_succed'  => '删除专题分类成功',

    'topic_information'             => '专题信息',
    'keywords'                      => '关键字：',
    'description'                   => '简单描述：',
    'yuan'                          => '元',
    'no_open'                       => '该专题开始时间未到，敬请期待。',
    'over'                          => '该专题截止日期已到，系统已下架。',

    'add_topic_category'            => '添加专题分类：',
    'topic_category_name'           => '分类名称',
    'operating'                     => '操作',
    'delete_topic_confirm'          => '您确定要删除专题吗？',
    'delete_topic_category_confirm' => '您确定要删除专题分类吗？',
    'delete'                        => '删除',
    'topic_category'                => '专题类型：',
    'remote_connections'            => '远程链接',
    'local_upload'                  => '本地上传',
    'upload_remark'                 => '在指定远程LOGO图片时, LOGO图片的URL网址必须为http:// 或 https://开头的正确URL格式!',
    'picture_preview'               => '图片预览',
    'browse'                        => '浏览',
    'modify'                        => '修改',
    'pic_remark'                    => '此模板的图片标准宽度为：960px 标准高度为：300px',
    'pic_remark_two'                => '此模板的图片标准宽度为：2px 标准高度为：38px',
    'delete_file_confirm'           => '您确定要删除此文件吗？',
    'file_address'                  => '文件地址：',
    'delete_file'                   => '删除文件',
    'edit_top_flash'                => '修改Flash文件',
    'start_time'                    => '活动开始时间：',
    'end_time'                      => '活动结束时间：',
    'seo_optimization'              => 'SEO优化',
    'separated_commas'              => '用英文逗号分隔',
    'topic_template_style'          => '专题模板样式',
    'please_select_topic_category'  => '请选择专题分类：',
    'no_category'                   => '未分类',
    'filter_information'            => '筛选搜索到的商品信息',
    'no_content'                    => '暂无内容',
    'selected_goods'                => '已选商品',
    'bulk_operations'               => '批量操作',
    'do_confirm'                    => '您确定要这么做吗？',
    'please_select_delete_topic'    => '请先选中要删除的专题',
    'delete_topic'                  => '删除专题',
    'search'                        => '搜索',
    'list_topic_name'               => '专题名称',
    'list_start_time'               => '活动开始时间',
    'list_end_time'                 => '活动结束时间',
    'edit_topic_name'               => '编辑专题名称',
    'preview'                       => '预览',

    'topic_manage'                  => '专题管理',
    'invalid_parameter'             => '参数无效',
    'topic'                         => '专题',
    'button_update'                 => '更新',
    'topic_update'                  => '专题更新',

    //js
    'topic_name_required'           => '请输入主题名称！',
    'start_time_required'           => '请输入开始日期！',
    'end_time_required'             => '请输入结束日期！',
    'no_message'                    => '未搜索到商品信息',
);

//end
