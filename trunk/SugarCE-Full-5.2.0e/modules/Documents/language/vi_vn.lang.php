<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'Tài liệu',
	'LBL_MODULE_TITLE' => 'Tài liệu: Trang chủ',
	'LNK_NEW_DOCUMENT' => 'Tạo mới tài liệu',
	'LNK_DOCUMENT_LIST'=> 'Danh sách tài liệu',
	'LBL_DOC_REV_HEADER' => 'Chỉnh sửa tài liệu',
	'LBL_SEARCH_FORM_TITLE'=> 'Tìm kiếm tài liệu',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Mã tài liệu',
	'LBL_NAME' => 'Tên tài liệu',
	'LBL_DESCRIPTION' => 'Mô tả',
	'LBL_CATEGORY' => 'Chuyên mục',
	'LBL_SUBCATEGORY' => 'Chuyên mục con',
	'LBL_STATUS' => 'Trạng thái',
	'LBL_CREATED_BY'=> 'Tạo bởi',
	'LBL_DATE_ENTERED'=> 'Ngày nhập',
	'LBL_DATE_MODIFIED'=> 'Ngày chỉnh sủa',
	'LBL_DELETED' => 'Xóa',
	'LBL_MODIFIED'=> 'Chỉnh sửa bởi ID',
	'LBL_MODIFIED_USER' => 'Chỉnh sửa bởi',
	'LBL_CREATED'=> 'Tạo bởi',
	'LBL_REVISIONS'=>'Chỉnh sủa',
	'LBL_RELATED_DOCUMENT_ID'=>'Mã tài liệu liên quan',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Mã tài liệu chỉnh sửa liên quan',
	'LBL_IS_TEMPLATE'=>'Là một mẫu',
	'LBL_TEMPLATE_TYPE'=>'Kiểu tài liệu',
	'LBL_ASSIGNED_TO_NAME'=>'Phân công cho:',
	'LBL_REVISION_NAME' => 'Chỉnh sửa số',
	'LBL_MIME' => 'Mime Type',
	'LBL_REVISION' => 'Chỉnh sửa',
	'LBL_DOCUMENT' => 'Tài liệu liên quan',
	'LBL_LATEST_REVISION' => 'Chỉnh sửa lần cuối',
	'LBL_CHANGE_LOG'=> 'Ghi chép thay đổi',
	'LBL_ACTIVE_DATE'=> 'Ngày công bố',
	'LBL_EXPIRATION_DATE' => 'Ngày hết hạn',
	'LBL_FILE_EXTENSION'  => 'File Extension',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Không chỉ rõ',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Tài liệu mới',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Tên tài liệu:',
	'LBL_FILENAME' => 'Tên file:',
	'LBL_DOC_VERSION' => 'Chỉnh sửa:',
	'LBL_CATEGORY_VALUE' => 'Chuyên mục:',
	'LBL_SUBCATEGORY_VALUE'=> 'Chuyên mục con:',
	'LBL_DOC_STATUS'=> 'Trạng thái:',
	'LBL_LAST_REV_CREATOR' => 'Chỉnh sửa được tạo bởi:',
	'LBL_LAST_REV_DATE' => 'Ngày chỉnh sửa:',
	'LBL_DOWNNLOAD_FILE'=> 'Tải file:',
	'LBL_DET_RELATED_DOCUMENT'=>'Tài liệu liên quan:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Tài liệu chỉnh sửa liên quan:",
	'LBL_DET_IS_TEMPLATE'=>'Mẫu? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Kiểu tài liệu:',



	'LBL_DOC_DESCRIPTION'=>'Mô tả:',
	'LBL_DOC_ACTIVE_DATE'=> 'Ngày công bố:',
	'LBL_DOC_EXP_DATE'=> 'Ngày hết hạn:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Danh sách tài liệu',
	'LBL_LIST_DOCUMENT' => 'Tài liệu',
	'LBL_LIST_CATEGORY' => 'Chuyên mục',
	'LBL_LIST_SUBCATEGORY' => 'Chuyên mục con',
	'LBL_LIST_REVISION' => 'Chỉnh sửa',
	'LBL_LIST_LAST_REV_CREATOR' => 'Công bố bởi',
	'LBL_LIST_LAST_REV_DATE' => 'Ngày chỉnh sửa',
	'LBL_LIST_VIEW_DOCUMENT'=>'Hiển thị',
    'LBL_LIST_DOWNLOAD'=> 'Tải về',
	'LBL_LIST_ACTIVE_DATE' => 'Ngày công bố',
	'LBL_LIST_EXP_DATE' => 'Ngày hết hạn',
	'LBL_LIST_STATUS'=>'Trạng thái',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Tên tài liệu:',
	'LBL_SF_CATEGORY' => 'Chuyên mục:',
	'LBL_SF_SUBCATEGORY'=> 'Chuyên mục con:',
	'LBL_SF_ACTIVE_DATE' => 'Ngày công bố:',
	'LBL_SF_EXP_DATE'=> 'Ngày hết hạn:',

	'DEF_CREATE_LOG' => 'Tài liệu đã tạo',

	//error messages
	'ERR_DOC_NAME'=>'Tên tài liệu',
	'ERR_DOC_ACTIVE_DATE'=>'Ngày công bố',
	'ERR_DOC_EXP_DATE'=> 'Ngày hết hạn',
	'ERR_FILENAME'=> 'Tên file',
	'ERR_DOC_VERSION'=> 'Phiên bản tài liệu',
	'ERR_DELETE_CONFIRM'=> 'Bạn muốn xóa bản chỉnh sửa tài liệu này?',
	'ERR_DELETE_LATEST_VERSION'=> 'Bạn không được phép xóa bản chỉnh sửa cuối cùng của tài liệu.',
	'LNK_NEW_MAIL_MERGE' => 'Hợp nhất thư',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Mẫu hợp nhất thư:',

	'LBL_TREE_TITLE' => 'Tài liệu',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Tên tài liệu',
	'LBL_CONTRACT_NAME'=>'Tên hợp đồng:',
	'LBL_LIST_IS_TEMPLATE'=>'Mẫu?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Kiểu tài liệu',
	'LBL_LIST_SELECTED_REVISION'=>'Lựa chọn chỉnh sửa',
	'LBL_LIST_LATEST_REVISION'=>'Chỉnh sửa lần cuối',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Hợp đồng liên quan',
	'LBL_LAST_REV_CREATE_DATE'=>'Ngày cuối cùng tạo chỉnh sửa ',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Hợp đồng',
    'LBL_CREATED_USER' => 'Nguời dùng đã tạo',
);


?>
