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
 *********************************************************************************/

$mod_strings = array(
'help'=>
array(
	'package'=>array(
			'create'=>'Cung cấp một <b> tên </ b> cho các gói phần mềm. Tên bạn nhập vào phải là các ch và không chứa các khoảng trắng. (Ví dụ: HR_Management)<br/>
<br/>
Bạn có thể cung cấp<b>Tác giả</b> và <b>mô tả</b> thông tin cho gói. <br/>
<br/>
Nhấp<b>lưu giữ</b> để tạo ra một gói.',
			'modify'=>'Các thuộc tính có thể có các hoạt động cho các <b> gói </ b> xuất hiện ở đây.<br>
<br>
Bạn có thể chỉnh sửa<b>Tên</b>, <b>Tác giả</b> và <b>Mô tả</b>của gói,cũng như xem và chỉnh tất cả các môđun chứa trong gói phần mềm.<br>
<br>
Nhấp <b>Modul mới</b> để tạo modul cho gói mới.<br>
<br>
Nếu gói phần mềm chứa ít nhất một trong các modul, bạn có thể <b>Publish</b> v à<b>Deploy</b> gói đó, giống như là<b>xuất ra</b>thực hiện tùy chỉnh trong các gói phần mềm.',
			'name'=>'Đây là <b>tên</b>hiện tại của các gói phần mềm. <br/>
<br/>
Tên bạn nhập vào phải được alphanumeric, bắt đầu bằng một chữ cái và các nội dung không có dấu cách. (Ví dụ: HR_Management)',
			'author'=>'Đây là <b>Tác giả</b>được hiển thị trong quá trình cài đặt như là tên của tổ chức đó tạo ra các gói phần mềm.<br>
<br>
Tác giả có thể là một cá nhân hay một công ty.',
			'description'=>'Đây<b>mô tả</b> gói phần mềm trong quá trình cài đặt.',
			'publishbtn'=>'Nhấp vào <b>Publish</b> để lưu tất cả các dữ liệu và nhập vào để tạo ra một tập tin. zip file đó là cài một phiên bản của gói.<br>
<br>
Sử dụng <b>tải về Modul</b>để tải lên tập tin. zip và cài đặt các gói phần mềm.',
			'deploybtn'=>'Nhấp vào <b>Deploy</b>để lưu tất cả các dữ liệu nhập vào và để cài đặt các gói phần mềm, bao gồm tất cả các mô-đun, trong hiện tại.',
			'duplicatebtn'=>'Nhấp vào<b>Duplicate</b>để sao chép nội dung của gói vào một gói phần mềm mới và để hiển thị các gói phần mềm mới. <br/>
<br/>
Cho gói mới,tên mới sẽ được tạo ra tự động của một số appending vào cuối tên của gói phần mềm được sử dụng để tạo mới .Bạn có thể đổi tên mới bằng cách nhập vào một gói phần mềm mới <b> Tên </ b> và nhấp vào Lưu <b> </ b>.',
			'exportbtn'=>'Nhấp vào <b>Xuất ra</b>để tạo một tập tin. zip tập tin chứa các tuỳ chỉnh trong các gói phần mềm.<br>
<br>
Đã tạo ra không phải là một tập tin để cài phiên bản phần mềm.<br>
<br>
Sử dụng <b>Tải Module</b>để nhập tập tin. zip và để có các gói phần mềm, bao gồm các tuỳ chỉnh, xuất hiện trong Module Builder.',
			'deletebtn'=>'Nhấp vào <b>Delete</b>để xoá gói này và tất cả các tập tin liên quan đến các gói này.',
			'savebtn'=>'Nhấp vào<b>Save</b>để lưu vào tất cả các dữ liệu liên quan tới các gói phần mềm.',
			'existing_module'=>'Nhấp vào <b>Module</b>biểu tượng để chỉnh sửa các tài sản và tuỳ chỉnh các trường, các mối quan hệ và bố trí kết hợp với các mô-đun.',
			'new_module'=>'Nhấp vào <b>Module mới</b>để tạo ra một module mới cho các gói này.',
			'key'=>'5-thư này, alphanumeric<b>Key</b> sẽ được sử dụng tiền tố cho tất cả các thư mục, tên lớp học và cơ sở dữ liệu cho tất cả các bảng biểu của các modul trong gói phần mềm hiện nay. <br>
<br>
Các phím được sử dụng trong một nỗ lực để đạt được bảng tên độc đáo.',
			'readme'=>'Nhấp để thêm <b>Readme</b> văn bản cho các gói này.<br>
<br>
Các Readme sẽ có sẵn tại thời điểm cài đặt.',
	),
	'main'=>array(

	),
	'module'=>array(




		'create'=>'Cung cấp một<b>Name</b> cho module.<b> Nhãn </ b> mà bạn cung cấp sẽ xuất hiện trong thẻ tab chuyển hướng. <br/>
<br/>
Chọn để hiển thị một chuyển hướng thẻ cho các module bằng cách kiểm tra <b> Danh mục chính tab </ b> ô trống.<br/>
<br/>
Sau đó, chọn kiểu module, bạn muốn tạo. <br/>
<br/>
Chọn một kiểu mẫu. Mỗi mẫu có chứa một bộ các lĩnh vực cụ thể, cũng như được xác định trước khi bố trí, sử dụng như là một cơ sở cho các module của bạn. <br/>
<br/>
Click <b>Save</b> để tạo module.',

		'modify'=>'Bạn có thể thay đổi các module tài sản hoặc tùy chỉnh <b> trường </ b>, <b> Quan hệ </ b> và <b> bày </ b> có liên quan đến các module.',
		'importable'=>'Kiểm tra <b>Importable</b> ô trống sẽ cho phép nhập khẩu cho các module này.<br>
<br>
Một liên kết tới nhập Wizard sẽ xuất hiện trong các phím tắt trong bảng điều khiển module.The Wizard tạo điều kiện nhập, nhập của các nguồn dữ liệu từ bên ngoài vào các tùy chỉnh module.',
		'team_security'=>'Kiểm tra<b>Team Security</b> ô trống sẽ cho phép đội ngũ bảo mật này cho các module. <br/>
<br/>
Nếu đội ngũ bảo mật được kích hoạt, các đội lựa chọn lĩnh vực này sẽ xuất hiện trong các bản ghi trong các module ',
		'reportable'=>'Kiểm tra các hộp này sẽ cho phép các module này để có bảng báo cáo hoạt động của nó.',
		'assignable'=>'Kiểm tra các hộp này sẽ cho phép ghi lại trong một module này sẽ được giao cho một người sử dụng lựa chọn.',
		'has_tab'=>'Kiểm tra <b>Navigation Tab</b>sẽ cung cấp một thẻ chuyển hướng cho các module.',
		'acl'=>'Kiểm tra các hộp này sẽ cho phép kiểm soát truy cập vào mô đun này, bao gồm cả cấp bậc lĩnh vực an ninh.',
		'studio'=>'Kiểm tra các hộp này sẽ cho phép các quản trị viên này để tùy chỉnh module trong vòng Studio.',
		'audit'=>'Kiểm tra các hộp này sẽ cho phép kiểm toán cho các module này. Thay đổi đối với một số lĩnh vực sẽ được ghi lại để các quản trị viên có thể xem xét việc thay đổi lịch sử.',
		'viewfieldsbtn'=>'Nhấp vào <b>View Fields</b>để xem các trường liên kết với các mô-đun và để tạo và chỉnh sửa các tuỳ chỉnh lĩnh vực.',
		'viewrelsbtn'=>'Nhấp vào <b> xem quan hệ </ b> để xem những mối quan hệ liên kết với các phân hệ này và để tạo ra các mối quan hệ mới.',
		'viewlayoutsbtn'=>'Nhấp vào <b>xem & bày </ b> để xem bố trí cho các module và để tùy chỉnh trong lĩnh vực sắp xếp bố trí.',
		'duplicatebtn'=>'Nhấp vào <b>Duplicate</b>để sao chép thuộc tính của các module mới vào một module và để hiển thị các module mới. <br/>
<br/>
Đối với các module mới, tên mới sẽ được tạo ra tự động của một số appending vào cuối tên của module được sử dụng để tạo mới.',
		'deletebtn'=>'Nhấp vào <b> Delete </ b> để xóa mô-đun này.',
		'name'=>'Đây là <b>Tên</b> hiện tại của module.<br/>
<br/>
Tên phải được alphanumeric, và phải bắt đầu bằng một chữ cái và các nội dung không có dấu cách. (Ví dụ: HR_Management)',
		'label'=>'Đây là <b> Nhãn </ b> sẽ xuất hiện trong các thẻ tab chuyển hướng cho các module. ',
		'savebtn'=>'Nhấp vào <b>Lưu</ b> để lưu tất cả các dữ liệu nhập liên quan tới các module.',
		'type_basic'=>'<b> Cơ bản </ b> cung cấp các loại mẫu cơ bản lĩnh vực, chẳng hạn như tên, chỉ để, đội, ngày tạo mô tả và các lĩnh vực.',
		'type_company'=>'<b> Công ty </ b> tổ chức cung cấp các loại mẫu-lĩnh vực cụ thể, chẳng hạn như Công ty, Công nghiệp và Địa chỉ. <br/>
<br/>
Sử dụng mẫu này để tạo ra module được tương tự với những tiêu chuẩn tài khoản module.',
		'type_issue'=>'<b> Số </ b> cung cấp các loại mẫu trường hợp-và-lỗi lĩnh vực cụ thể, chẳng hạn như số, tình trạng, và ưu tiên mô tả. <br/>
<br/>
Sử dụng mẫu này để tạo ra module được tương tự với những tiêu chuẩn trường hợp và module lỗi Tracker.',
		'type_person'=>'<b> Cá nhân </ b> cung cấp các loại mẫu riêng lĩnh vực cụ thể, chẳng hạn như Salutation, tiêu đề, tên, địa chỉ và số điện thoại. <br/>
<br/>
Sử dụng mẫu này để tạo ra module được tương tự với những tiêu chuẩn địa chỉ liên lạc và module tiềm năng.',
		'type_sale'=>'<b> Bán </ b> cung cấp các loại mẫu cơ hội lĩnh vực cụ thể, chẳng hạn như Lead tháng, giai đoạn, số lượng và Probability. <br/>
<br/>
sử dụng mẫu này để tạo ra module tương tự với những tiêu chuẩn cơ hội module.',
		'type_file'=>'<b> Tệp tin </ b> cung cấp các mẫu văn bản lĩnh vực cụ thể, chẳng hạn như tên tập tin, loại hình tài liệu, và ngày xuất bản. <br>
<br>
Sử dụng mẫu này để tạo ra module tương tự với những tiêu chuẩn văn bản module.',

	),
	'dropdowns'=>array(
		'default' => 'Tất cả các <b> Dropdowns </ b> cho các ứng dụng được liệt kê ở đây.<br>
<br>
Các dropdowns có thể được sử dụng cho các lĩnh vực dropdown trong bất kỳ module.<br>
<br>
Để thực hiện thay đổi cho một dropdown hiện tại, bấm vào tên dropdown.<br>
<br>
Nhấp vào <b> Thêm Dropdown </ b> để tạo một dropdown mới.',
		'editdropdown'=>'Danh sách Dropdown có thể được sử dụng cho các tiêu chuẩn hay tùy chỉnh dropdown trong lĩnh vực bất kỳ của mô-đun.<br>
<br>
Cung cấp một <b> Tên </ b> cho các danh sách dropdown.<br>
<br>
Nếu bất cứ ngôn ngữ nào được cài đặt trong gói ứng dụng, bạn có thể chọn <b> ngôn ngữ </ b> để sử dụng cho các bản ghi trong danh sách.<br>
<br>
Trong những khoản <b> Tên </ b>, cung cấp một tên cho các tùy chọn trong danh sách dropdown. Tên gọi này sẽ không xuất hiện trong danh sách dropdown có thể nhìn thấy cho những người sử dụng.<br>
<br>
Trong <b> Hiển thị Nhãn </ b>, cung cấp cho một nhãn sẽ được hiển thị cho người sử dụng.<br>
<br>
Sau khi cung cấp các sản phẩm và hiển thị tên nhãn, nhấp vào <b> Thêm </ b> để thêm các mục vào danh sách dropdown.<br>
<br>
Để sắp xếp lại các bản ghi trong danh sách, kéo và thả các bản ghi vào vị trí mong muốn.<br>
<br>
Để chỉnh sửa hiển thị nhãn hiệu của một mục, hãy nhấp vào biểu tượng <b> Hiệu chỉnh </ b>, và nhập một nhãn mới. Để xóa một mục từ danh sách dropdown, hãy nhấp vào biểu tượng <b> Xoá</b>.<br>
<br>
Để hủy bước thay đổi được thực hiện cho một nhãn hiển thị, hãy nhấp vào Hoàn tác <b> </ b>. Để lại một thay đổi mà bạn đã được hoàn tác, nhấp vào <b>Làm lại </ b>.<br>
<br>
Nhấp vào <b>Lưu </ b> để lưu danh sách các dropdown.',

	),
	'subPanelEditor'=>array(
		'modify'	=> 'Tất cả các lĩnh vực mà có thể được hiển thị trong khi <b> Subpanel </ b> xuất hiện ở đây.<br>
<br>
	<b> Mặc định </ b> cột chứa các lĩnh vực được hiển thị trong khi Subpanel.<br/>
<br/>
	<b> Hidden </ b> cột chứa các lĩnh vực mà có thể được thêm vào các cột mặc định.',
		'savebtn'	=> 'Nhấp vào Lưu & Triển khai <b> </ b> để lưu các thay đổi bạn đã thực hiện và để làm cho chúng hoạt động trong các module.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử của trang.',
		'Hidden' 	=> '<b> Hidden </ b> lĩnh vực không xuất hiện trong các subpanel.',
		'Default'	=> '<b> mặc định </ b> xuất hiện trong các lĩnh vực subpanel.',

	),
	'listViewEditor'=>array(
		'modify'	=> 'Tất cả các lĩnh vực mà có thể được hiển thị trong <b> ListView </ b> xuất hiện ở đây.<br>
<br>
	<b> Mặc định </ b> cột chứa các lĩnh vực được hiển thị trong ListView theo mặc định.<br/>
<br/>
<b>Có sẵn </ b> các cột chứa các lĩnh vực mà một người dùng có thể lựa chọn trong tìm kiếm để tạo một ListView. <br/>
<br/>
<b> Hidden </ b> cột chứa các lĩnh vực mà có thể được thêm vào mặc định sẵn có hoặc cột.',
		'savebtn'	=>'Nhấp vào <b> Lưu & Triển khai </ b> để lưu các thay đổi bạn đã thực hiện và để làm cho chúng hoạt động trong các mô-đun.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử của trang.',
		'Hidden' 	=> '<b> Hidden </ b> trường hiện không có sẵn cho người dùng để xem trong ListViews.',
		'Available' => '<b>Available</ b> không phải là lĩnh vực được hiển thị theo mặc định, nhưng có thể được thêm vào ListViews của người dùng.',
		'Default'	=> '<b> mặc định </ b> xuất hiện trong lĩnh vực ListViews không được tùy chỉnh của người sử dụng.'
	),
	'searchViewEditor'=>array(
		'modify'	=> 'Tất cả các lĩnh vực mà có thể được hiển thị trong khi <b> Tìm kiếm </ b> hình thức xuất hiện ở đây.<br>
<br>
	<b> Mặc định </ b> cột chứa các lĩnh vực mà sẽ được hiển thị trong khi tìm kiếm hình thức.<br/>
<br/>
	<b> Hidden </ b> cột chứa các lĩnh vực có sẵn cho bạn như là một admin để thêm vào các mẫu đơn tìm kiếm.',
		'savebtn'	=> 'Bấm vào <b> Lưu & Triển khai </ b> sẽ lưu tất cả các thay đổi và làm cho họ hoạt động',
		'Hidden' 	=> '<b> Hidden </ b> lĩnh vực không xuất hiện trong các tìm kiếm.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử của trang.',
		'Default'	=> '<b> mặc định </ b> xuất hiện trong các lĩnh vực tìm kiếm.'
	),
	'layoutEditor'=>array(
		'defaultdetailview'=>'	
<b> Bố trí </ b> khu vực chứa các lĩnh vực mà hiện đang được hiển thị trong vòng <b> DetailView</b>.<br/>
<br/>
	<b>Công cụ</ b> chứa các <b> Recycle Bin </ b> và các bố trí lĩnh vực và yếu tố có thể được thêm vào bố trí.<br>
<br>
	Thực hiện các thay đổi cho bố trí bằng cách kéo và thả yếu tố và các lĩnh vực giữa các <b> Công cụ </ b> và <b> Bố cục </ b> và bố trí trong chính nó.<br>
<br>
Để loại bỏ một trường từ bố cục, kéo các lĩnh vực để <b> Recycle Bin </ b>. Các lĩnh vực sau đó sẽ có sẵn trong Công cụ để thêm vào việc bố trí.',
		'defaultquickcreate'=>'<b> Bố trí </ b> khu vực chứa các lĩnh vực mà hiện đang được hiển thị trong vòng <b> QuickCreate </ b> hình thức.<br>
<br>
	Các QuickCreate hình thức xuất hiện trong subpanels cho các module khi được bấm vào nút Tạo.<br/>
<br/>
	<b> Công cụ </ b> chứa các <b> Recycle Bin </ b> và các lĩnh vực bố trí và yếu tố có thể được thêm vào bố trí.<br>
<br>
	Thực hiện các thay đổi cho bố trí bằng cách kéo và thả yếu tố và các lĩnh vực giữa các <b> Công cụ </ b> và <b> Bố cục </ b> và bố trí trong chính nó.<br>
<br>
Để loại bỏ một trường từ bố cục, kéo các lĩnh vực để <b> Recycle Bin </ b>. Các lĩnh vực sau đó sẽ có sẵn trong Công cụ để thêm vào sự bố trí.',
		//this defualt will be used for edit view
		'default'	=> '<b> Bố trí </ b> khu vực chứa các lĩnh vực mà hiện đang được hiển thị trong vòng <b> EditView </ b>.<br/>
<br/>
	<b> Công cụ </ b> chứa các <b> Recycle Bin </ b> và các trường lĩnh vực và yếu tố có thể được thêm vào các trường.<br>
<br>
	Thực hiện các thay đổi cho trường bằng cách kéo và thả yếu tố và các lĩnh vực giữa các <b> Công cụ </ b> và <b> Bố cục </ b> và bố trí trong chính nó.<br>
<br>
	Để loại bỏ một trường từ bố cục, kéo các lĩnh vực để <b> Recycle Bin </ b>. Các lĩnh vực sau đó sẽ có sẵn trong Công cụ để thêm vào việc bố trí',	
'saveBtn'	=> 'Nhấp vào <b>Lưu </ b> để lưu giữ những thay đổi bạn đã thực hiện từ bố trí thời gian qua bạn đã lưu nó.<br>
<br>
Những thay đổi sẽ không được hiển thị trong module, cho đến khi bạn lưu triển khai những thay đổi.',
		'historyBtn'=> 'Nhấp vào <b> Xem Lịch sử </ b> để xem và khôi phục lại một cách bố trí đã lưu trước đó từ lịch sử
> hoán đổi
		.',
		'publishBtn'=> 'Nhấp vào <b>Lưu & Triển khai</ b> để lưu tất cả các thay đổi bạn đã thực hiện từ bố trí thời gian qua bạn đã lưu nó, và để   thực hiện những thay đổi tích cực trong các module.<br>
<br>
	
Việc bố trí ngay lập tức sẽ được hiển thị trong các module.',
		'toolbox'	=> '<b> Công cụ </ b> chứa các <b> Recycle Bin </ b>, thêm các yếu tố bố trí và thiết lập các lĩnh vực có sẵn để thêm vào việc bố trí.<br/>
<br/>
Các thành phần và các trường trong các lĩnh vực có thể được kéo và thả vào trong hộp công cụ.<br>
<br>
	Các thành phần được bố trí <b> Panels </ b> và <b> Hàng </ b>. Thêm một hàng hoặc một bảng điều khiển mới cho bố trí thêm địa điểm cung cấp trong các lĩnh vực bố trí cho trường.<br/>
<br/>
	Kéo và thả bất kỳ trường nào vào hộp công cụ hoặc bố trí vào một vị trí để trao đổi các địa điểm của cả hai trường.<br/>
<br/>
	<b> Filler </ b> tạo ra không gian trống trong bố trí nơi mà nó được đặt.',
		'panels'	=> '<b> Bố trí </ b> khu vực cung cấp một quan điểm về cách thức bố trí sẽ xuất hiện trong các module khi những thay đổi đã thực hiện bố trí được tuyển dụng.<br/>
<br/>
Bạn có thể reposition lĩnh vực, các hàng và bảng bằng cách kéo và thả chúng ở vị trí mong muốn .<br/>
<br/>
Hủy bỏ yếu tố bằng cách kéo và thả chúng ở trong <b> Recycle Bin </ b> trong việc đến đây, hoặc thêm các thành phần và các lĩnh vực mới bằng cách kéo chúng từ <b> hộp công cụ</ b> s và thả chúng ở vị trí mong muốn trong việc bố trí.',
		'delete'	=> 'Kéo và thả bất kỳ thành phần nào ở đây để xoá bỏ nó từ người cài đặt',
		'property'	=> 'Hiệu chỉnh các nhãn hiển thị cho trường này. <br/>
<b>Tab Order</b> kiểm soát những tab yêu cầu key giữa các trường.',
	),
	'fieldsEditor'=>array(
		'default'	=> '<b> Trường tên</ b> có sẵn cho các module được liệt kê ở đây<br>
<br>
	Tuỳ chỉnh cho các trường tạo ra mô-đun xuất hiện ở trên các trường mà có sẵn cho các module mặc định.<br>
<br>
	Để chỉnh sửa một trường, bấm vào <b> Trường Tên </ b>.<br/>
<br/>
	Để tạo một lĩnh vực mới, bấm vào <b> Thêm Trường </ b>.',
		'mbDefault'=>'<b> Trường </ b> có sẵn cho các module được liệt kê ở đây bởi Trường Tên.<br>
<br>
 	Để tùy chỉnh nhãn của các trường mẫu, hãy nhấp vào Trường Tên.<br>
<br>
Để tạo một lĩnh vực mới, bấm vào <b> Thêm Trường </ b>. Các nhãn cùng với các tài sản khác của các lĩnh vực mới có thể được sửa đổi sau khi tạo ra bằng cách nhấp vào trường Tên.<br>
<br>
	Sau khi triển khai module là, các lĩnh vực mới tạo trong Module Builder được coi như là tiêu chuẩn trong các lĩnh vực triển khai module trong Studio',
        'addField'	=> 'Chọn một <b>Loại Dữ liệu </ b> cho các lĩnh vực mới. Loại xác định những gì mà bạn chọn loại ký tự có thể được nhập vào cho các trường. Ví dụ, chỉ số điện thoại là số nguyên có thể được tham gia vào trường<br>
<br>
Cung cấp một <b> Tên </ b> cho các lĩnh vực. Tên phải được alphanumeric và phải không được chứa bất kỳ dấu cách. Dưới là hợp lệ.<br>
<br>
	Hiển thị <b> Nhãn </ b> là các nhãn mà sẽ xuất hiện cho các trường bố trí trong các module. Các hệ thống <b> Nhãn </ b> được sử dụng để tham khảo các trường trong các mã.<br>
<br>
	Tùy thuộc vào loại dữ liệu được lựa chọn cho các lĩnh vực, một số hoặc tất cả các tài sản sau đây có thể được thiết lập cho các lĩnh vực:<br>
<br>
<b> Văn bản trợ giúp</ b> sẽ xuất hiện tạm thời trong khi một người dùng hovers trên các lĩnh vực và có thể được sử dụng để nhắc nhở người sử dụng cho các loại hình nhập mong muốn.<br>
<br>
<b> Văn bản thảo luận</ b> là chỉ nhìn thấy trong vòng Studio & / hoặc Module Builder, và có thể được dùng để mô tả các lĩnh vực cho các quản trị viên.<br>
<br>
<b> Giá trị mặc định </ b> sẽ xuất hiện trong cùng lĩnh vực. Người dùng có thể nhập một giá trị mới trong các lĩnh vực hoặc sử dụng các giá trị mặc định.<br>
<br>
Chọn <b> Mass Cập nhật </ b> ô trống để có thể sử dụng Mass Cập nhật tính năng cho các trường.<br>
<br>
<b> Kích thước tối đa </ b> giá trị sẽ xác định số lượng tối đa ký tự có thể được nhập vào trong cùng trường.<br>
<br>
Chọn <b>Trường yêu cầu</ b> ô trống để làm cho các trường cần thiết. Một giá trị phải được cung cấp cho các trường để có thể lưu một bản ghi có chứa các trường.<br>
<br>
Chọn <b> Bảng báo cáo </ b> ô trống để cho phép các trường sẽ được sử dụng để cho các bộ lọc và hiển thị dữ liệu trong báo cáo.<br>
<br>
Chọn <b> Kiểm toán </ b> ô trống để có thể theo dõi các thay đổi vào các lĩnh vực trong Thay đổi Đăng nhập<br>
Chọn một tùy chọn ở trong <b> Bảng nhập </ b> cho phép, không cho phép hoặc yêu cầu các trường để được nhập vào trong nhập khẩu Wizard. <br>
<br>
Chọn một tùy chọn ở trong <b>Hợp nhất </ b> để kích hoạt hay vô hiệu hóa các tim bản sao và các tính năng hợp nhất. <br>
<br>
Các tài sản có thể được đặt cho một số loại dữ liệu.',
		'editField' => 'Hiển thị <b> Nhãn </ b> của một trường Sugar có thể được tùy chỉnh. Việc các đặc tính khác của các trường có thể không được tùy chỉnh. <br>
<br>
Nhấp vào <b> clone </ b> để tạo ra một lĩnh vực mới với cùng một thuộc tính.',
        'mbeditField' => 'Hiển thị <b> Nhãn </ b> của một trường mẫu có thể được tùy chỉnh. Việc các tài sản khác của các trường có thể không được tùy chỉnh. <br>
<br>
Nhấp vào <b> clone </ b> để tạo ra một lĩnh vực mới với cùng một thuộc tính.<br>
<br>
Để loại bỏ một trường mẫu để nó không hiển thị trong các mô-đun, xoá bỏ những trường từ  <b>Layout </b>thích hợp.'

	),
	'exportcustom'=>array(
	    'exportHelp'=>'Tuỳ chỉnh xuất khẩu thực hiện trong Studio bằng cách tạo ra các gói có thể được tải lên thành một đường thông qua các <b> Modul tải</b>.<br>
<br>
Trước tiên, cung cấp một gói phần mềm <b> Tên </ b>. Bạn có thể cung cấp cho <b> Tác giả </ b> và <b> Mô tả </ b> thông tin cho các gói phần mềm cũng như.<br>
<br>
Lựa chọn Modul (s) có chứa các tuỳ chỉnh mà bạn muốn xuất ra. Chỉ có Module chứa tuỳ chỉnh sẽ xuất hiện để bạn lựa chọn. <br>
<br>
Sau đó bấm vào <b> Xuất ra </ b> để tạo một tập tin. Zip tập tin cho các gói phần mềm có chứa các tuỳ chỉnh.',
	    'exportCustomBtn'=>'Nhấp vào <b>Xuất ra </ b> để tạo một tập tin. Zip tập tin cho các gói phần mềm có chứa các tuỳ chỉnh mà bạn muốn xuất ra.',
	    'name'=>'Đây là <b> Tên </ b> của gói. Tên gọi này sẽ được hiển thị trong quá trình cài đặt.',
	    'author'=>'Đây là <b> Tác giả </ b> được hiển thị trong quá trình cài đặt như là tên của tổ chức đó tạo ra các gói phần mềm. Tác giả có thể được, hoặc một cá nhân hay một công ty.',
	    'description'=>'Đây là <b> Mô tả </ b> của gói được hiển thị trong quá trình cài đặt.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Chào mừng bạn đến với khu vực <b> phát triển công cụ </ b>. <br/>
<br/>
Sử dụng các công cụ trong khu vực này để tạo và quản lý theo tiêu chuẩn và tùy chỉnh mô-đun và các trường.',
		'studioBtn'	=> 'Sử dụng <b> Studio </ b> để tùy chỉnh, triển khai module.',
		'mbBtn'		=> 'Sử dụng <b> Module Builder </ b> để tạo ra module mới.',
		'sugarPortalBtn' => 'Sử dụng <b>Biên soạn Sugar Portal </ b> để quản lý và tuỳ chỉnh Sugar Portal,.',
		'dropDownEditorBtn' => 'Sử dụng <b>Biên soạn Dropdown</ b> để thêm và chỉnh sửa dropdowns toàn cầu cho các lĩnh vực dropdown.',
		'appBtn' 	=> 'Áp dụng chế độ là nơi bạn có thể tuỳ chỉnh các thuộc tính của chương trình, chẳng hạn như có bao nhiêu TPS các báo cáo được hiển thị trên trang chủ',
		'backBtn'	=> 'Quay trở lại trang trước',
		'studioHelp'=> 'Sử dụng <b> Studio </ b> để xác định xem những gì và làm thế nào để thông tin được hiển thị trong các module.',
		'moduleBtn'	=> 'Nhấp vào để chỉnh sửa module này.',
		'moduleHelp'=> 'Các thành phần mà bạn có thể tùy chỉnh cho các mô-đun xuất hiện ở đây.<br>
<br>
Click vào một biểu tượng để lựa chọn thành phần để chỉnh sửa.',
		'fieldsBtn'	=> 'Tạo và chỉnh <b> trường </ b> để lưu trữ thông tin trong các module.',
		'labelsBtn' => 'Hiệu chỉnh <b> Nhãn </ b> là hiển thị cho các trường và các tiêu đề trong các module.'	,
	    'relationshipsBtn' => 'Thêm mới hoặc xem tồn tại <b> Quan hệ </ b> cho các module.' ,
		'layoutsBtn'=> 'Tuỳ chỉnh module <b>Layout </ b>.Quan điểm của các module contaning lĩnh vực là khác nhau.<br>
<br>
Bạn có thể quyết định những trường xuất hiện và cách thức chúng được bố trí trong mỗi tổ chức.',
		'subpanelBtn'=> 'Quyết định những lĩnh vực xuất hiện trong các <b> Subpanels </ b> trong các mô-đun.',
		'portalBtn' =>'Tuỳ chỉnh module <b>Layout</ b> mà xuất hiện trong các <b> Sugar Portal </ b>.',
		'layoutsHelp'=> 'Những module<b> Layout </ b> có thể được tùy biến xuất hiện ở đây.<br>
<br>
Các lĩnh vực bố trí hiển thị và các dữ liệu<br>
<br>
Nhấp vào một biểu tượng để lựa chọn bố trí để chỉnh sửa.',
		'subpanelHelp'=> '<b> Subpanels </ b> trong các module có thể được tùy biến xuất hiện ở đây.<br>
<br>
Nhấp vào vào một biểu tượng để lựa chọn modul để chỉnh sửa.',
        'newPackage'=>'Nhấp vào <b>Gói mới</ b> để tạo ra một gói phần mềm mới.',
        'exportBtn' => 'Nhấp vào <b>Tùy chỉnh hàng xuất ra</ b> để tạo ra và tải về một gói phần mềm có chứa tuỳ chỉnh và được thực hiện trong Studio cho module.',
        'mbHelp'    => 'Sử dụng <b> Module Builder </ b> để tạo ra các gói có chứa module tuỳ chỉnh dựa trên tiêu chuẩn hay tùy chỉnh các đối tượng.',
	    'viewBtnEditView' => 'Tuỳ chỉnh module <b> EditView </ b> Layout.<br>
<br>
Các EditView là một hình thức có chứa dữ liệu vào lĩnh vực capturing cho người sử dụng nhập dữ liệu.',
	    'viewBtnDetailView' => 'Tuỳ chỉnh module \<b> DetailView </ b> Layout.<br>
<br>
Các DetailView hiển thị cho người dùng nhập vào trường dữ liệu.',
		'viewBtnDashlet' => 'Tuỳ chỉnh module \  <b> Sugar Dashlet </ b>, bao gồm cả việc Sugar Dashlet \' s ListView và Tìm kiếm.<br>
<br>
Các Sugar Dashlet sẽ có sẵn để thêm vào các trang web trong mô-đun Trang chủ.',
	    'viewBtnListView' => 'Tuỳ chỉnh module\ <b> ListView </ b> Layout.<br>
<br>
Các kết quả tìm kiếm xuất hiện trong ListView.',
	    'searchBtn' => 'Tuỳ chỉnh module \ <b> Tìm kiếm </ b> Layout.<br>
<br>
Xác định những trường có thể được dùng để lọc các hồ sơ liên quan xuất hiện trong ListView.',
		'viewBtnQuickCreate' =>  'Tuỳ chỉnh module \ <b> ListView </ b> Layout.<br>
<br>
Các hình thức tạo nhanh xuất hiện trong subpanels và email trong modul.',

	    'searchHelp'=> '<b>Các hình thức tìm kiếm </ b>có thể được tùy biến xuất hiện ở đây.<br>
<br>
Các hình thức tìm kiếm chứa các lĩnh vực để lọc các bộ hồ sơ.<br>
<br>
Nhấp vào một biểu tượng để lựa chọn bố trí tìm kiếm để chỉnh sửa.',
	    'dashletHelp' =>'<b>Sugar Dashlet </ b>Layout có thể được tùy biến xuất hiện ở đây.<br>
<br>
Các Sugar Dashlet sẽ có sẵn để thêm vào các trang web trong module Trang chủ.',
	    'DashletListViewBtn' =>'	
<b> Mía đường Dashlet ListView </ b> sẽ hiển thị hồ sơ, dựa vào các Dashlet Mía đường tìm kiếm các bộ lọc.',
	    'DashletSearchViewBtn' =>'<b> Sugar Dashlet Tìm kiếm </ b> các bộ lọc hồ sơ cho các danh sách xem Dashlet.',
		'BasicSearchBtn' => 'Tuỳ chỉnh <b>Tìm kiếm cơ bản </ b> hình thức xuất hiện trong các thẻ tab Tìm kiếm, Tìm kiếm khu vực cho các mô-đun.',
	    'AdvancedSearchBtn' => 'Tùy chỉnh <b> Tìm kiếm nâng cao </ b> hình thức xuất hiện trong thẻ tab tìm kiếm nâng cao ,Tìm kiếm trong khu vực cho các modul ".',
	    'portalHelp' => 'Quản lý và tuỳ chỉnh <b> Sugar Portal </ b>.',
	    'SPUploadCSS' => 'Tải lên <b>phong cách trang Sheet</b> cho Sugar Portal.',
	    'SPSync' => '<b> Đồng bộ hoá </ b> tuỳ chỉnh cho Sugar Portal.',
	    'Layouts' => 'Tuỳ chỉnh <b> Layout </ b> của Sugar Portal, module.',
	    'portalLayoutHelp' => 'Những module trong Sugar Portal, xuất hiện trong khu vực này.<br>
<br>
Chọn một modul để chỉnh sửa <b> Layout </ b>.',
		'relationshipsHelp' => 'Tất cả các <b> Quan hệ </ b> mà còn tồn tại giữa các phân hệ và mô-đun triển khai khác xuất hiện ở đây.<br>
<br>
Các mối quan hệ <b> Tên </ b> là các hệ thống tạo ra tên cho mối quan hệ.<br>
<br>
<b>Modul chính thức</ b> là các modul đó sở hữu các mối quan hệ. Ví dụ, tất cả các thuộc tính của các mối quan hệ đó có tài khoản cho các mô-đun chính là mô-đun sẽ được lưu trong cơ sở dữ liệu tài khoản.<br>
<br>
<b> Type </ b> là loại có thể có được mối quan hệ giữa các module chính và các <b> module liên quan </ b>. <br>
<br>
Nhấp vào một tiêu đề cột để sắp xếp theo cột.<br>
<br>
Nhấp vào một hàng trong các mối quan hệ bảng để xem những tài sản gắn liền với mối quan hệ<br>
<br>
Nhấp vào  <b>Thêm mối quan hệ </ b> để tạo ra một mối quan hệ mới.<br>
<br>
Quan hệ có thể được tạo ra bất kỳ giữa hai modul triển khai .',
        'relationshipHelp'=>'<b> Quan hệ </ b> có thể được tạo ra giữa các phân hệ khác và module triển khai .<br>
<br>
Được bày tỏ mối quan hệ trực quan thông qua subpanels và các lĩnh vực liên quan trong hồ sơ module.<br>
<br>
Chọn một trong những mối quan hệ sau đây <b> Loại </ b> cho các Modul:<br>
<br>
	
<b>Một - Một </ b> - Cả hai module \sẽ chứa các trường hồ sơ liên quan.<br>
<br>
<b>	Một - Nhiều </ b> - Các module chính \ hồ sơ sẽ chứa một subpanel, và module liên quan  \hồ sơ sẽ chứa một trường liên quan.<br>
<br>
<b>	
Nhiều - Nhiều </ b> - Cả hai module \hồ sơ sẽ hiển thị subpanels.<br>
<br>
Chọn <b> module liên quan </ b> cho các mối quan hệ. <br>
<br>
Nếu các loại hình liên quan đến mối quan hệ subpanels, chọn subpanel xem thích hợp cho các module.<br>
<br>
	
Nhấp vào <b>Lưu</ b> để tạo ra các mối quan hệ',
		'editDropDownBtn' => 'Sửa đổi toàn bộ, Dropdown',
		'addDropDownBtn' => 'Thêm mới toàn bộ Dropdown',
	),
	'fieldsHelp'=>array(
		'default'=>'<b> Trường </ b> trong các module được liệt kê ở đâu bởi Trường Tên.<br>
<br>
Một mẫu Modul bao gồm các trường trước khi quyết định<br>
<br>
Để tạo một trường mới, bấm vào <b> Thêm Trường </ b>. <br>
<br>
Để chỉnh sửa một trường, bấm vào <b> Tên Trường </ b>. <br/>
<br/>
Sau khi triển khai module là, các trường mới tạo trong mục xây dựng module, cùng với các mẫu trường, được coi như là tiêu chuẩn trong lĩnh vực Studio.',
	),
	'relationshipsHelp'=>array(
		'default'=>'<b> Quan hệ </ b> đã được tạo ra giữa các module và các module được xuất hiện ở đây.<br>
<br>
Các mối quan hệ <b> Tên </ b> là các hệ thống tạo ra tên cho mối quan hệ. <br>
<br>
<b> Module chính thức </ b> là các module sở hữu các mối quan hệ. Các mối quan hệ thuộc tính sẽ được lưu trong cơ sở dữ liệu của bảng và phụ thuộc vào chính module. <br>
<br>
<b> Loại </ b> là loại có thể có được mối quan hệ giữa các module chính và các <b> module liên quan </ b>. <br>
<br>
Nhấp vào một tiêu đề cột để sắp xếp theo cột<br>
<br>
Nhấp vào một hàng trong các mối quan hệ bảng để xem và chỉnh sửa các thuộc tính gắn liền với mối quan hệ.<br>
<br>
Nhấp vào <b>Thêm mối quan hệ </ b> để tạo ra một mối quan hệ mới.',
		'addrelbtn'=>'Di chuột lên để thêm mối quan hệ..',
		'addRelationship'=>'<b>Quan hệ </ b> có thể được tạo ra giữa các phân hệ khác và tùy chỉnh module hoặc một module triển khai<br>
<br>
Được bày tỏ mối quan hệ trực quan thông qua subpanels và các lĩnh vực liên quan trong  hồ sơ module.<br>
<br>
Chọn một trong những mối quan hệ sau đây <b> Loại </ b> cho các module:<br>
<br>
<b>Một - Một </ b> - Cả hai module \sẽ chứa các trường hồ sơ liên quan.<br>
<br>
<b>	Một - Nhiều </ b> - Các module chính \ hồ sơ sẽ chứa một subpanel, và Module liên quan  \hồ sơ sẽ chứa một trường liên quan.<br>
<br>
<b>Nhiều - Nhiều </ b> - Cả hai module \hồ sơ sẽ hiển thị subpanels.<br>
<br>
Chọn <b>module liên quan</ b> cho các mối quan hệ. <br>
<br>
Nếu các loại hình liên quan đến mối quan hệ subpanels, chọn subpanel xem cho các Modul thích hợp.<br>
<br>
Nhấp vào<b>Lưu</ b> để tạo ra các mối quan hệ.',
	),
	'labelsHelp'=>array(
		'default'=> '<b> Nhãn </ b> cho các trường và các tiêu đề trong các Module có thể được thay đổi.<br>
<br>
Hiệu chỉnh các nhãn bằng cách nhấp chuột vào bên trong trường, nhập vào một nhãn mới và nhấp vào <b>Lưu</ b>.<br>
<br>
	
Nếu bất cứ ngôn ngữ nào được cài đặt trong gói ứng dụng, bạn có thể chọn <b> ngôn ngữ </ b> để sử dụng cho các nhãn.',
		'saveBtn'=>'Nhấp vào <b> Lưu </ b> để lưu tất cả các thay đổi',
		'publishBtn'=>'Nhấp vào <b>  Lưu & Triển khai </ b> để lưu tất cả các thay đổi và làm cho họ hoạt động.',
	),
	'portalSync'=>array(
	    'default' => 'Nhập các <b> Sugar Portal, URL </ b> của các cổng để cập nhật thông tin, và bấm vào <b>Go</ b>. <br</b>.<br>
<br>
Sau đó nhập đúng tên truy cập và mật khẩu và sau đó nhấp vào <b>Băt đầu Sync</b>.<br>
<br>
Các tuỳ chỉnh đã thực hiện ở cổng điện tử Sugar, <b> Trình bày </ b>, cùng với các <b>kiểu Sheet </ b> nếu đã được tải lên, sẽ được chuyển sang xác định các cổng điện tử cài đặt .',
	),
	'portalStyle'=>array(
	    'default' => 'Bạn có thể tùy chỉnh giao diện của cổng điện tử Sugar, bằng cách sử dụng kiểu trang sheet.<br>
<br>
Lựa chọn một <b>kiểu trang Sheet</b> để tải lên.<br>
<br>
Kiểu cách trang sheet sẽ được thực hiện trong cổng điện tử, lần sau khi đồng bộ hoá là một performedsheet.',
	),
),

'assistantHelp'=>array(
	'package'=>array(
			//custom begin
			'nopackages'=>'Để bắt đầu một dự án trên, nhấp vào <b>gói mới</ b> để tạo ra một gói phần mềm mới để tuỳ chỉnh module của cá nhân. <br/>
<br/>
Mỗi gói có thể chứa một hay nhiều module.<br/>
<br/>
Ví dụ, bạn có thể muốn tạo ra một gói phần mềm có chứa một trong những tùy chỉnh module là liên quan tới các tiêu chuẩn của tài khoản module. Hoặc, bạn có thể tạo ra một gói phần mềm có chứa nhiều module mới mà làm việc cùng nhau như là một dự án và có liên quan đến nhau và cho những người khác đã có trong module ứng dụng.',
			'somepackages'=>'Một <b> gói </ b> như là một hành vi chứa cho các tuỳ chỉnh module, tất cả đều là một phần của một trong những dự án. Các gói phần mềm có thể chứa một hoặc nhiều <b>module tuỳ chỉnh  </ b>, có thể liên quan đến nhau hoặc cho những người khác trong các ứng dụng module.<br/>
<br/>
Sau khi tạo ra một gói phần mềm cho các dự án của bạn, bạn có thể tạo module cho các gói phần mềm ngay lập tức, hoặc bạn có thể quay trở lại Module Builder tại sau một thời gian để hoàn thành dự án.<br>
<br>
Khi dự án hoàn thành, bạn có thể <b> Triển khai </ b> các gói phần mềm để cài đặt hoặc tuỳ chỉnh trong các module ứng dụng.',
			'afterSave'=>'Gói phần mềm mới của bạn nên có ít nhất một trong những module. Bạn có thể tạo một hoặc nhiều tùy chỉnh module cho các gói phần mềm.<br/>
<br/>
Nhấp vào <b>module mới </ b> để tạo ra một module cho các gói này.<br/>
<br/>
Sau khi tạo ra ít nhất một trong những module, bạn có thể xuất ra hay triển khai các gói phần mềm để làm cho nó sẵn sàng cài đặt cho bạn hoặc những người dùng khác.<br/>
<br/>
Để triển khai các gói phần mềm là một trong những bước đường của bạn trong vòng cài đặt, nhấp vào <b> Triển khai </ b>.<br>
<br>
Nhấp vào <b> Publish </ b> để lưu các gói phần mềm như là một. Zip file. Sau khi. Zip tập tin sẽ được lưu vào hệ thống của bạn, hãy sử dụng <b> Module tải </ b> để tải lên và cài đặt các gói phần mềm của bạn trong cài đặt Sugar. <br/>
<br/>
Bạn có thể phân phối các tập tin cho những người dùng khác được đăng tải và cài đặt riêng của họ trong trường Sugar.',
			'create'=>'Một<b> gói </ b> như là một biểu hiện chứa cho các module tuỳ chỉnh, tất cả đều là một phần của một trong những dự án. Các gói phần mềm có thể chứa một hoặc nhiều <b> module tuỳ chỉnh </ b>, có thể liên quan đến nhau hoặc cho những người khác trong các ,module ứng dụng.<br/>
<br/>
Sau khi tạo ra một gói phần mềm cho các dự án của bạn, bạn có thể tạo module cho các gói phần mềm ngay lập tức, hoặc bạn có thể quay trở lại Module Builder tại sau một thời gian để hoàn thành dự án.',
			),
	'main'=>array(
		'welcome'=>'Sử dụng các <b> Công cụ phát triển</ b> để tạo và quản lý theo tiêu chuẩn và module tùy chỉnh và các lĩnh vực. <br/>
<br/>
Để quản lý trong các module ứng dụng, hãy nhấp vào <b> Studio </ b>. <br/>
<br/>
Để tạo module tùy chỉnh, hãy nhấp vào <b> Module Builder </ b>.',
		'studioWelcome'=>'Hiện tại tất cả các module cài đặt, bao gồm các tiêu chuẩn và module-nạp các đối tượng, được tùy chỉnh trong Studio.'
	),
	'module'=>array(
		'somemodules'=>"Kể từ khi gói phần mềm hiện nay có chứa ít nhất một trong những module, bạn có thể <b> Triển khai </ b> các module trong gói phần mềm của bạn trong Sugar hay <b>Publish </ b> các gói phần mềm được cài đặt trong hiện tại hay cài đặt Sugar khác dụ bằng cách sử dụng module tải <b> </ b>. <br/>
<br/>
Để cài đặt các gói phần mềm trực tiếp của bạn trong cài đặt Sugar, nhấp vào <b> Triển khai </ b>.<br>
<br>
Để tạo một tập tin. Zip cho các gói phần mềm có thể được tải và cài đặt trong Sugar hiện tại và các trường bằng cách sử dụng <b> module tải </ b>, nhấp vào <b>Publish</ b>. <br/>
<br/>
Bạn có thể xây dựng các module cho các gói phần mềm trong giai đoạn này, và chuẩn bị triển khai hoặc khi bạn đã sẵn sàng để làm như thế. <br/>
<br/>
Sau khi công bố hoặc triển khai một gói, bạn có thể thực hiện thay đổi vào đặc tính của các gói phần mềm tùy chỉnh thêm module. Sau đó, tái xuất bản hoặc tái triển khai các gói phần mềm để áp dụng cho các thay đổi." ,
		'editView'=> 'Tại đây bạn có thể chỉnh sửa các trường. Bạn có thể gỡ bỏ trường bất kỳ hoặc thêm trường có sẵn trong bảng điều khiển bên trái.',
		'create'=>'Khi chọn <b> Loại </ b> của module mà bạn muốn tạo ra, hãy ghi nhớ các loại trường mà bạn muốn có trong các module. <br/>
<br/>
Mỗi module mẫu có chứa một số các trường liên quan đến các loại module mô tả của tiêu đề.<br/>
<br/>
<b>Cơ bản </ b> - Cung cấp trường cơ bản liên quan xuất hiện trong module tiêu chuẩn, chẳng hạn như tên, đội, ngày tạo mô tả và các trường.<br/>
<br/>
<b>Công ty </ b> - Cung cấp tổ chức trương cụ thể, chẳng hạn như công ty, công nghiệp và địa chỉ. Sử dụng mẫu này để tạo ra module được tương tự với những tiêu chuẩn tài khoản module.<br/>
<br/>
<b> Người </ b> - Cung cấp từng lĩnh vực cụ thể, chẳng hạn như Salutation, tiêu đề, tên, địa chỉ và số điện thoại. Sử dụng mẫu này để tạo ra module được tương tự với những tiêu chuẩn module. <br/>
<br/>
<b>Issue</b> -Cung cấp cho trường hợp lỗi-và-lĩnh vực cụ thể, chẳng hạn như số, tình trạng, và mô tả. Sử dụng mẫu này để tạo ra module tương tự với những tiêu chuẩn module Bug Tracker.<br/>
<br/>
Lưu ý: Sau khi bạn tạo các module, bạn có thể chỉnh sửa các nhãn của các trường được cung cấp bởi những bản mẫu, cũng như tạo các trường tùy chỉnh để thêm vào các module bố trí.',
		'afterSave'=>'Module tùy chỉnh cho phù hợp với nhu cầu của bạn bằng cách chỉnh sửa và tạo các trường, thiết lập các mối quan hệ với các module và sắp xếp các trường trong bố trí.<br/>
<br/>
Để xem các mẫu và các trường quản lý tuỳ chỉnh trong lĩnh vực module, hãy nhấp vào <b> Xem các trường</b>.<br/>
<br/>
Để tạo và quản lý các mối quan hệ giữa các module, cho dù đã có trong module ứng dụng hoặc các module tùy chỉnh trong cùng một gói phần mềm, bấm vào <b> Xem Quan hệ</b>.<br/>
<br/>
Để chỉnh sửa bố trí các module, hãy nhấp vào <b> Xem </ b>. Bạn có thể thay đổi xem chi tiết xem, xem và sửa đổi Danh sách xem bố trí cho các module cũng giống như bạn đã có trong module cho các ứng dụng trong vòng Studio.<br/>
<br/>
Để tạo một module với cùng một thuộc tính như module hiện nay, hãy nhấp vào <b> trùng lặp </ b>. Bạn có thể tuỳ chỉnh thêm module mới.',
		'viewfields'=>'Các lĩnh vực trong các module có thể được tùy chỉnh cho phù hợp với nhu cầu của bạn.<br/>
<br/>
Bạn không thể xoá các trường tiêu chuẩn , nhưng bạn có thể loại bỏ chúng khỏi những bố trí thích hợp trong trình bày trang. <br/>
<br/>
Bạn có thể chỉnh sửa các nhãn của các lĩnh vực tiêu chuẩn. Việc các thuộc tính khác theo tiêu chuẩn của các trường là không thể hiệu chỉnh. Tuy nhiên, bạn có thể nhanh chóng tạo các trường mới có đặc tính tương tự bằng cách nhấp chuột vào một trường tên và sau đó nhấp vào <b> clone </ b> trong <b> Thuộc tính </ b> hình thức. Nhập bất cứ thuộc tính mới, và sau đó nhấp vào <b> Lưu </ b>.<br/>
<br/>
Nếu bạn là một module tùy biến, một khi các module đã được cài đặt, không phải tất cả các lĩnh vực bất động sản có thể được chỉnh sửa. Đặt tất cả các tài sản cho các lĩnh vực tiêu chuẩn và tùy chỉnh lĩnh vực trước khi bạn xuất bản và cài đặt các gói có chứa các tùy chỉnh module',
		'viewrelationships'=>'Bạn có thể tạo ra rất nhiều đến các mối quan hệ giữa các phân hệ hiện tại và các module trong gói phần mềm, hoặc giữa các phân hệ hiện tại và các module đã được cài đặt trong ứng dụng.<br>
<br>
Để tạo một-nhiều và một-một trong những mối quan hệ, tạo <b> liên quan </ b> và <b> Flex liên quan </ b> trường cho các module.',
		'viewlayouts'=>'Bạn có thể kiểm soát được những lĩnh vực có sẵn cho capturing dữ liệu <b>Xem hiệu chỉnh </ b>. Bạn cũng có thể kiểm soát những gì sẽ hiển thị các trong dữ liệu <b> Xem chi tiết </ b>. Các quan điểm không cần phải phù hợp. <br/>
<br/>
Tạo nhanh các mẫu đơn này sẽ được hiển thị khi <b> Tạo </ b> là bấm vào trong một modlule subpanel. Theo mặc định, <b> Tạo nhanh  </ b> hình thức bố trí tương tự như chỉnh sửa mặc định<b> Xem </ b> bố trí. Bạn có thể tùy chỉnh tạo mẫu nhanh để nó có chứa ít hơn các lĩnh vực khác nhau ,xem chỉnh sửa <br>
<br>
Bạn có thể xác định mô-đun bảo mật bằng cách sử dụng Sơ đồ tuỳ biến cùng với vai trò quản lý </br>.<br>
<br>
',
		'existingModule' =>'Sau khi tạo và tùy biến module này, bạn có thể tạo thêm các module, hoặc trả lại cho các gói phần mềm để <b>Publish</ b> hay <b> triển khai </ b> gói.<br>
<br>
Để tạo thêm các module, hãy nhấp vào <b> trùng lặp </ b> để tạo ra một module với cùng một thuộc tính như module hiện nay, hoặc điều hướng quay trở lại phần mềm, và nhấp vào <b>Module mới </ b>.<br>
<br>
Nếu bạn đã sẵn sàng để <b>Publish </ b> hay <b> triển khai </ b> chứa các gói module này, điều hướng quay trở lại phần mềm để thực hiện các chức năng. Bạn có thể xuất bản và triển khai gói phần mềm có chứa ít nhất một trong những module.',
		'labels'=> 'Các nhãn theo tiêu chuẩn của các trường cũng như các lĩnh vực tùy chỉnh có thể được thay đổi. Thay đổi trường nhãn sẽ không ảnh hưởng đến dữ liệu được lưu giữ trong các trường.',
	),
	'listViewEditor'=>array(
		'modify'	=> 'Hiện có ba cột hiển thị ở bên trái. Những "mặc định" cột chứa các lĩnh vực được hiển thị trong một danh sách xem theo mặc định, việc "loạn" cột chứa các lĩnh vực đó, một người sử dụng có thể chọn để sử dụng cho việc tạo một danh sách xem, và "Ẩn" cột chứa các lĩnh vực có sẵn cho bạn như là một admin để thêm vào hoặc là mặc định hoặc hiện có cho việc sử dụng các cột của người sử dụng, nhưng hiện đang bị vô hiệu hoá.',
		'savebtn'	=> 'Bấm vào Lưu <b> </ b> sẽ lưu tất cả các thay đổi và hoạt động.',
		'Hidden' 	=> 'Bấm vào Lưu <b> </ b> sẽ lưu tất cả các thay đổi và làm cho họ hoạt động.',
		'Available' => 'Trường là lĩnh vực có sẵn mà không được hiển thị theo mặc định, nhưng có thể được kích hoạt bởi người sử dụng.',
		'Default'	=> 'Mặc định lĩnh vực được hiển thị cho người sử dụng những người đã tạo ra không xem danh sách tùy chỉnh trong cài đặt.'
	),

	'searchViewEditor'=>array(
		'modify'	=> 'Có hai cột hiển thị ở bên trái. Những "mặc định" cột chứa các lĩnh vực mà sẽ được hiển thị trong khi tìm kiếm xem, và "Ẩn" cột chứa các lĩnh vực có sẵn cho bạn như là một admin để thêm vào xem.',
		'savebtn'	=> 'Bấm vào Lưu & triển khai <b> </ b> sẽ lưu tất cả các thay đổi và hoạt động.',
		'Hidden' 	=> 'Ẩn trường là lĩnh vực mà sẽ không được hiển thị trong quá trình tìm kiếm xem.',
		'Default'	=> 'Mặc định lĩnh vực nào sẽ được hiển thị trong quá trình tìm kiếm xem.'
	),
	'layoutEditor'=>array(
		'default'	=> 'Có hai cột hiển thị ở bên trái. Cột bên tay phải, hiện tại có nhãn bố trí hoặc bố trí trước, là nơi bạn thay đổi bố trí các module. Cột bên tay trái, có chứa thành phần và các công cụ hữu ích cho việc sử dụng khi soạn thảo các bố trí. <br/>
<br/>
Nếu việc bố trí khu vực được bố trí có tiêu đề hiện tại thì bạn đang làm việc trên một bản sao của bố trí hiện tại đang được sử dụng bởi các module để hiển thị.<br/>
<br/>
Nếu nó là một tiêu đề bố cục trước sau đó bạn làm việc trên một bản sao tạo ra trước đó của một nhấp chuột lên nút Lưu, mà có thể đã bị thay đổi kể từ phiên bản xem bởi người sử dụng module này.',
		'saveBtn'	=> 'Bấm vào nút này để bạn có thể lưu giữ các thay đổi của bạn. Khi bạn quay trở lại module này, bạn sẽ bắt đầu thay đổi bố trí. Tuy nhiên cách bố trí của bạn sẽ không được xem bởi người sử dụng module cho đến khi bạn nhấp chuột vào nút Lưu và Xuất bản.
> hoán đổi
		',
		'publishBtn'=> 'Bấm vào nút này để triển khai việc bố trí. Điều này có nghĩa là bố trí này sẽ được hiển thị ngay lập tức của người sử dụng module này.',
		'toolbox'	=> 'Các Công cụ chứa nhiều tính năng hữu ích cho việc hiệu chỉnh bố trí, bao gồm một thùng rác, khu vực tập hợp các yếu tố bổ sung và một bộ các trường có sẵn.Có thể được kéo lên tụt xuống và bố trí.',
		'panels'	=> 'Khu vực này cho thấy cách bố trí của bạn sẽ xem xét cho những người sử dụng module này, khi nó được depolyed<br/>
<br/>
Bạn có thể reposition yếu tố chẳng hạn như lĩnh vực, các hàng và bảng bằng cách kéo và thả chúng; xóa thành phần bằng cách kéo và thả chúng vào thùng rác trong khu vực đến đây, hoặc thêm thành phần mới bằng cách kéo chúng, bố trí trong các vị trí mong muốn.'
	),
	'dropdownEditor'=>array(
		'default'	=> 'Có hai cột hiển thị ở bên trái. Cột bên tay phải, hiện tại có nhãn bố trí hoặc bố trí trước, là nơi bạn thay đổi bố trí các mô-đun.Cột bên tay trái, có chứa thành phần và các công cụ hữu ích cho việc sử dụng khi soạn thảo các bố trí. <br/>
<br/>
Nếu việc bố trí khu vực được bố trí có tiêu đề hiện tại thì bạn đang làm việc trên một bản sao của bố trí hiện tại đang được sử dụng bởi các module để hiển thị.<br/>
<br/>
Nếu nó là một tiêu đề Bố cục trước sau đó bạn làm việc trên một bản sao tạo ra trước đó của một nhấp chuột lên nút lưu, mà có thể đã bị thay đổi kể từ phiên bản xem bởi người sử dụng module này.',
		'dropdownaddbtn'=> 'Bấm vào nút này cho biết thêm một mục mới vào dropdown.',

	),
	'exportcustom'=>array(
	    'exportHelp'=>'Tuỳ chỉnh thực hiện trong vòng Studio này dụ có thể được đóng gói và triển khai trong dụ khác<br>
<br>
Cung cấp một <b> Tên trọn gói </ b>. Bạn có thể cung cấp cho <b> Tác giả </ b> và <b> Mô tả </ b> thông tin cho các gói phần mềm
> hoán đổi
		.<br>
<br>
Lựa chọn module có chứa các tuỳ chỉnh để xuất khẩu. (Chỉ có module chứa tuỳ chỉnh sẽ xuất hiện để bạn lựa chọn.)<br>
<br>
Nhấp vào <b>Xuất ra</ b> để tạo một tập tin. Zip tập tin cho các gói phần mềm có chứa các tuỳ chỉnh.Tập tin . Zip  có thể được tải lên trong dụ khác thông qua <b> Module tải </ b>.',
	    'exportCustomBtn'=>'Nhấp vào <b>Xuất ra </ b> để tạo một tập tin. Zip tập tin cho các gói phần mềm có chứa các tuỳ chỉnh mà bạn muốn xuất ra.
',
	    'name'=>'<b> Tên </ b> của gói sẽ được hiển thị trong module tải sau khi được tải lên cho các gói phần mềm cài đặt trong Studio.',
	    'author'=>'<b> Tác giả </ b> là tên của tổ chức đó tạo ra các gói phần mềm. Tác giả có thể được, hoặc một cá nhân hay một công ty. <br>
<br>
Tác giả sẽ được hiển thị trong module tải sau khi được tải lên cho các gói phần mềm cài đặt trong Studio.
',
	    'description'=>'<b> Mô tả </ b> của gói sẽ được hiển thị trong module tải sau khi được tải lên cho các gói phần mềm cài đặt trong Studio.',
	),
	'studioWizard'=>array(
		'mainHelp' 	=> 'Chào mừng bạn đến với <b> Phát triển Công cụ
</b1>
khu vực. <br/>
<br/>
Sử dụng các công cụ trong khu vực này để tạo và quản lý theo tiêu chuẩn và tùy chỉnh mô-đun và các lĩnh vực.',
		'studioBtn'	=> 'Sử dụng <b> Studio </ b> để tùy chỉnh cài đặt module bằng cách thay đổi các trường sắp xếp, lựa chọn những trường có sẵn và tạo ra các dữ liệu lĩnh vực tùy chỉnh.',
		'mbBtn'		=> 'Sử dụng <b> Module Builder </ b> để tạo ra module mới.',
		'appBtn' 	=> 'Sử dụng ửng dụng để tùy chỉnh các chế độ thuộc tính của chương trình, chẳng hạn như có bao nhiêu TPS các báo cáo được hiển thị trên trang chủ',
		'backBtn'	=> 'Quay trở lại bước trước.',
		'studioHelp'=> 'Sử dụng <b> Studio </ b> để tùy chỉnh cài đặt module.',
		'moduleBtn'	=> 'Nhấp vào để chỉnh sửa module này.',
		'moduleHelp'=> 'Lựa chọn module thành phần mà bạn muốn chỉnh sửa',
		'fieldsBtn'	=> 'Hiệu chỉnh những thông tin nào được lưu giữ trong các module kiểm tra, kiểm soát của các trường <b> </ b> trong các module. <br/>
<br/>
Bạn có thể chỉnh sửa và tạo các lĩnh vực tùy chỉnh ở đây.',
		'labelsBtn' => 'Nhấp vào Lưu <b> </ b> để lưu các tuỳ chỉnh của nhãn.'	,
		'layoutsBtn'=> 'Tuỳ chỉnh <b>bố trí </ b> của các Chỉnh sửa, Xem chi tiết, danh sách và tìm kiếm xem.',
		'subpanelBtn'=> 'Hiệu chỉnh những thông tin nào được hiển thị trong module này subpanels.',
		'layoutsHelp'=> 'Chọn một <b> Bố cục để chỉnh sửa </ b>. <Br / <br/>
Để thay đổi bố trí có chứa dữ liệu cho các lĩnh vực nhập dữ liệu, hãy nhấp vào Hiệu chỉnh <b> Xem </ b>.<br/>
<br/>
Để thay đổi bố trí hiển thị các dữ liệu nhập vào trong các lĩnh vực Hiệu chỉnh Xem, hãy nhấp vào <b> Xem chi tiết</ b>. <br/>
<br/>
Để thay đổi các cột trong đó xuất hiện trong danh sách mặc định, bấm vào Danh mục <b> Xem </ b>. <br/>
<br/>
Để thay đổi cơ bản và nâng cao hình thức bố trí tìm kiếm, nhấp vào <b> Tìm kiếm </ b>. ',
		'subpanelHelp'=> 'Chọn một <b> Subpanel </ b> để chỉnh sửa.',
		'searchHelp' => 'Chọn một <b> Tìm kiếm </ b> bố trí để chỉnh sửa.',
		'labelsBtn'	=> 'Hiệu chỉnh <b> Nhãn </ b> để hiển thị cho các giá trị trong module này.',
        'newPackage'=>'Nhấp vào <b>trọn gói mới </ b> để tạo ra một gói phần mềm mới.',
        'mbHelp'    => '<b>Chào mừng đến Module Builder.</b><br/>
<br/>
Sử dụng <b> Module Builder </ b> để tạo ra các gói có chứa module tuỳ chỉnh dựa trên tiêu chuẩn hay tùy chỉnh các đối tượng. <br/>
<br/>
Để bắt đầu, nhấp vào <b>trọn gói mới </ b> để tạo ra một gói phần mềm mới, hoặc chọn một gói phần mềm để chỉnh sửa.<br/>
<br/>
Một <b> gói </ b> như là một hành vi chứa cho các module tuỳ chỉnh, tất cả đều là một phần của một trong những dự án. Các gói phần mềm có thể chứa một hay nhiều tùy chỉnh module, có thể liên quan đến nhau hoặc để trong các ứng dụng module. <br/>
<br/>
Ví dụ: Bạn có thể muốn tạo ra một gói phần mềm có chứa một trong những tùy chỉnh mô-đun đó là liên quan tới các tiêu chuẩn tài khoản module. Hoặc, bạn có thể muốn tạo ra một gói phần mềm có chứa nhiều module mới mà làm việc cùng nhau như là một dự án và có liên quan với nhau và module trong các ứng dụng.',
        'exportBtn' => 'Nhấp vào <b> hàng xuất khẩu tuỳ chỉnh </ b> để tạo ra một gói phần mềm có chứa tuỳ chỉnh thực hiện trong Studio cụ thể cho module',
	),


),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Biên soạn Dropdown',

//ASSISTANT
'LBL_AS_SHOW' => 'Hiển thị trợ lý trong tương lai.',
'LBL_AS_IGNORE' => 'Bỏ qua trợ lý trong tương lai.',
'LBL_AS_SAYS' => 'Trợ lý nói:',


//STUDIO2
'LBL_MODULEBUILDER'=>'Module Builder',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Biên soạn Dropdown',
'LBL_EDIT_DROPDOWN'=>'Hiệu chỉnh Dropdown',
'LBL_DEVELOPER_TOOLS' => 'Công cụ phát triển',
'LBL_SUGARPORTAL' => 'Biên soạn Sugar Portal',
'LBL_SYNCPORTAL' => 'Sync Portal',
'LBL_PACKAGE_LIST' => 'Danh sách gói',
'LBL_HOME' => 'Trang',
'LBL_NONE'=>'-None-',

'LBL_ADD_FIELDS'=>'Thêm một trường tùy chỉnh',
'LBL_AVAILABLE_SUBPANELS'=>'Có sẵn Subpanels',
'LBL_ADVANCED'=>'Nâng cao',
'LBL_ADVANCED_SEARCH'=>'TÌm kiếm nâng cao',
'LBL_BASIC'=>'Cơ bản',
'LBL_BASIC_SEARCH'=>'Tìm kiếm cơ bản',
'LBL_CURRENT_LAYOUT'=>'Layout',
'LBL_CURRENCY' => 'Currency',
'LBL_DASHLET'=>'Bảng điều khiển Sugar',
'LBL_DASHLETLISTVIEW'=>'Xem danh sách bảng điều khiển Sugar',
'LBL_DASHLETSEARCH'=>'Tìm kiếm bảng điều khiển Sugar',
'LBL_DASHLETSEARCHVIEW'=>'Tìm kiếm bảng điều khiển Sugar',
'LBL_DISPLAY_HTML'=>'Hiển thị mã HTML',
'LBL_DETAILVIEW'=>'Xem chi tiết',
'LBL_DROP_HERE' => '[Xóa ở đây]',
'LBL_EDIT'=>'Chỉnh sửa',
'LBL_EDIT_LAYOUT'=>'Chỉnh sửa bố trí',
'LBL_EDIT_ROWS'=>'Sửa đổi hàng',
'LBL_EDIT_COLUMNS'=>'Sửa đổi cột',
'LBL_EDIT_LABELS'=>'Sửa đổi nhãn',
'LBL_EDIT_FIELDS'=>'Tùy chỉnh trường',
'LBL_EDIT_PORTAL'=>'Chỉnh sửa cổng điện tử ',
'LBL_EDIT_FIELDS'=>'Chỉnh sửa trường',
'LBL_EDITVIEW'=>'Xem và sửa',
'LBL_FILLER'=>'(Bộ lọc)',
'LBL_FIELDS'=>'Trường',
'LBL_FAILED_TO_SAVE' => 'Không để lưu',
'LBL_FAILED_PUBLISHED' => 'Không thể xuất bản',
'LBL_HOMEPAGE_PREFIX' => 'Của cá nhân',
'LBL_LAYOUT_PREVIEW'=>'Xem bố cục',
'LBL_LAYOUTS'=>'Bố cục',
'LBL_LISTVIEW'=>'Xem danh sách',
'LBL_MODULES'=>'Modules',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Gói mới',
'LBL_NEW_PANEL'=>'Bảng mới',
'LBL_NEW_ROW'=>'Hàng mới',
'LBL_PACKAGE_DELETED'=>'Gói đã xóa',
'LBL_PUBLISHING' => 'Publishing ...',
'LBL_PUBLISHED' => 'Đã xuất bản',
'LBL_SELECT_FILE'=> 'Lựa chọn tập tin',
'LBL_SAVE_LAYOUT'=> 'Lưu bố cục',
'LBL_SELECT_A_SUBPANEL' => 'Lựa chọn một Subpanel',
'LBL_SELECT_SUBPANEL' => 'Lựa chọn Subpanel',
'LBL_SUBPANELS' => 'Subpanels',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SEARCH_FORMS' => 'Tìm kiếm',
'LBL_SEARCH'=>'Tìm kiếm',
'LBL_STAGING_AREA' => 'Staging Area (kéo thả các bản ghi ở đây)',
'LBL_SUGAR_FIELDS_STAGE' => 'Trường Sugar (Nhấp vào mục để thêm staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (Nhấp vào mục để thêm staging area)',
'LBL_TOOLBOX' => 'Hộp công cụ',
'LBL_VIEW_SUGAR_FIELDS' => 'Xem trường Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Xem Sugar Bin',
'LBL_QUICKCREATE' => 'Tạo nhanh',
'LBL_EDIT_DROPDOWNS' => 'Chỉnh sửa Global Dropdown',
'LBL_ADD_DROPDOWN' => 'Thêm Global Dropdown mới',
'LBL_BLANK' => '-blank-',
'LBL_TAB_ORDER' => 'Tab Order',

'LBL_DROPDOWN_TITLE_NAME' => 'Tên',
'LBL_DROPDOWN_LANGUAGE' => 'Ngôn ngữ',
'LBL_DROPDOWN_ITEMS' => 'Danh sách mục',
'LBL_DROPDOWN_ITEM_NAME' => 'Tên mục',
'LBL_DROPDOWN_ITEM_LABEL' => 'Hiện thị nhãn',

//RELATIONSHIPS
'LBL_MODULE' => 'Module',
'LBL_MODULE' => 'Module',
'LBL_LHS_MODULE'=>'Module chính',
'LBL_CUSTOM_RELATIONSHIPS' => '* Tạo ra mối quan hệ giữa Studio và Module Builder',
'LBL_RELATIONSHIPS'=>'Quan hệ',
'LBL_RELATIONSHIP_EDIT' => 'Chỉnh sửa mối quan hệ',
'LBL_REL_NAME' => 'Tên',
'LBL_REL_LABEL' => 'Nhãn',
'LBL_REL_TYPE' => 'Loại',
'LBL_RHS_MODULE'=>'Module liên quan',
'LBL_NO_RELS' => 'Không có quan hệ',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Điều kiện bắt buộc' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Cột',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Giá trị',
'LBL_SUBPANEL_FROM'=>'Subpanel từ',
'LBL_RELATIONSHIP_ONLY'=>'Không có thể nhìn thấy yếu tố có sẵn được tạo ra cho mối quan hệ này , hiện có thể nhìn thấy mối quan hệ giữa hai module.',
'LBL_ONETOONE' => 'Một - Một',
'LBL_ONETOMANY' => 'Một - Nhiều',
'LBL_MANYTOMANY' => 'Nhiều - Nhiều',


//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Lựa chọn một chức năng hoặc các thành phần.',
'LBL_QUESTION_MODULE1' => 'Lựa chọn một module.',
'LBL_QUESTION_EDIT' => 'Lựa chọn một module để chỉnh sửa.',
'LBL_QUESTION_LAYOUT' => 'Lựa chọn một layout để chỉnh sửa.',
'LBL_QUESTION_SUBPANEL' => 'Lựa chọn một subpanel để chỉnh sửa.',
'LBL_QUESTION_SEARCH' => 'Lựa chọn tìm kiếm bố cục để chỉnh sửa',
'LBL_QUESTION_MODULE' => 'Lựa chọn một thành phần của module để chỉnh sửa.',
'LBL_QUESTION_PACKAGE' => 'Chọn một gói phần mềm để chỉnh sửa, hoặc tạo ra một gói phần mềm mới.',
'LBL_QUESTION_EDITOR' => 'Lựa chọn một công cụ.',
'LBL_QUESTION_DROPDOWN' => 'Chọn một dropdown để chỉnh sửa, hoặc tạo một dropdown mới',
'LBL_QUESTION_DASHLET' => 'Chọn một dashlet layout để chỉnh sửa.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Liên quan',
'LBL_NAME'=>'Tên',
'LBL_LABELS'=>'Nhãn',
'LBL_MASS_UPDATE'=>'Update khối',
'LBL_AUDITED'=>'Kiểm toán',
'LBL_CUSTOM_MODULE'=>'Module',
'LBL_DEFAULT_VALUE'=>'Giá trị mặc định',
'LBL_REQUIRED'=>'Yêu cầu',
'LBL_DATA_TYPE'=>'Loại',
'LBL_HCUSTOM'=>'Lựa chọn',
'LBL_HDEFAULT'=>'Mặc định',
'LBL_LANGUAGE'=>'Ngôn ngữ:',


//SECTION
'LBL_SECTION_EDLABELS' => 'Chỉnh sửa nhãn',
'LBL_SECTION_PACKAGES' => 'Các gói',
'LBL_SECTION_PACKAGE' => 'Gói',
'LBL_SECTION_MODULES' => 'Modules',
'LBL_SECTION_PORTAL' => 'Cổng điện tử',
'LBL_SECTION_DROPDOWNS' => 'Dropdowns',
'LBL_SECTION_PROPERTIES' => 'Những thuộc tính',
'LBL_SECTION_DROPDOWNED' => 'Chỉnh sửa Dropdown',
'LBL_SECTION_HELP' => 'Giúp đỡ',
'LBL_SECTION_ACTION' => 'Hành động',
'LBL_SECTION_MAIN' => 'Chính',
'LBL_SECTION_EDPANELLABEL' => 'Chỉnh sửa bảng nhãn',
'LBL_SECTION_FIELDEDITOR' => 'Chỉnh sửa trường',
'LBL_SECTION_DEPLOY' => 'Triển khai',
'LBL_SECTION_MODULE' => 'Module',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Mặc định',
'LBL_HIDDEN'=>'Ân',
'LBL_AVAILABLE'=>'Có sẵn',
'LBL_LISTVIEW_DESCRIPTION'=>'Hiện có ba cột hiển thị dưới đây. <b> Mặc định </ b> cột chứa các lĩnh vực được hiển thị trong một danh sách xem theo mặc định. <b> Bổ sung </ b> cột chứa các lĩnh vực đó, một người sử dụng có thể chọn để sử dụng cho việc tạo một lần xem.  	
<b>Sănư có </ b> cột hiển thị các trường cho bạn như là một quản trị viên để thêm vào các cột mặc định hoặc bổ sung cho việc sử dụng của người dùng.',
'LBL_LISTVIEW_EDIT'=>'Xem danh sách biên soạn',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Xem trước',
'LBL_MB_RESTORE'=>'Khôi phục',
'LBL_MB_DELETE'=>'Xóa bỏ',
'LBL_MB_COMPARE'=>'Hoàn thành',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Thêm vào',
'LBL_BTN_SAVE'=>'Lưu ',
'LBL_BTN_SAVE_CHANGES'=>'Lưu giữ thay đổi',
'LBL_BTN_DONT_SAVE'=>'Hủy thay đổi',
'LBL_BTN_CANCEL'=>'Hủy bỏ',
'LBL_BTN_CLOSE'=>'Đóng',
'LBL_BTN_UPLOAD'=>'Tải lên',
'LBL_BTN_SAVEPUBLISH'=>'Lưu và triển khai',
'LBL_BTN_NEXT'=>'Tiếp theo',
'LBL_BTN_BACK'=>'Trở lại',
'LBL_BTN_CLONE'=>'Clone',
'LBL_BTN_ADDCOLS'=>'Thêm cộ',
'LBL_BTN_ADDROWS'=>'Thêm hàng',
'LBL_BTN_ADDFIELD'=>'Thêm trường',
'LBL_BTN_ADDDROPDOWN'=>'Thêm Dropdown',
'LBL_BTN_SORT_ASCENDING'=>'Sắp xếp tăng dần',
'LBL_BTN_SORT_DESCENDING'=>'Sắp xếp giảm dần',
'LBL_BTN_EDLABELS'=>'Chỉnh sửa nhãn',
'LBL_BTN_UNDO'=>'Hoàn tất',
'LBL_BTN_REDO'=>'Làm lại',
'LBL_BTN_ADDCUSTOMFIELD'=>'Thêm trường tùy chỉnh',
'LBL_BTN_EXPORT'=>'Tùy chỉnh xuất ra',
'LBL_BTN_DUPLICATE'=>'Trùng lặp',
'LBL_BTN_PUBLISH'=>'Xuất ra',
'LBL_BTN_DEPLOY'=>'Triển khai',
'LBL_BTN_EXP'=>'Xuất ra',
'LBL_BTN_DELETE'=>'Xóa bỏ',
'LBL_BTN_VIEW_LAYOUTS'=>'Xem Layouts',
'LBL_BTN_VIEW_FIELDS'=>'Xem trường',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Xem mối quan hệ',
'LBL_BTN_ADD_RELATIONSHIP'=>'Thêm mối quan hệ',
//TABS


//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Lỗi: luôn có một trường tồn tại',
'ERROR_INVALID_KEY_VALUE'=> "Lỗi:Mật khẩu không đúng [']",
'ERROR_NO_HISTORY' => 'Không tìm thấy nhật ký tập tin',





































//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Tên gói:',
'LBL_MODULE_NAME'=>'Tên Module:',
'LBL_AUTHOR'=>'Tác giả:',
'LBL_DESCRIPTION'=>'Mô tả:',
'LBL_KEY'=>'Khóa:',
'LBL_ADD_README'=>' Readme',
'LBL_MODULES'=>'Modules:',
'LBL_LAST_MODIFIED'=>'Chỉnh sửa lần cuối:',
'LBL_NEW_MODULE'=>'Module mới',
'LBL_LABEL'=>'Nhãn:',
'LBL_LABEL_TITLE'=>'Nhãn',
'LBL_WIDTH'=>'Chiều rộng',
'LBL_PACKAGE'=>'Gói:',
'LBL_TYPE'=>'Loại:',
'LBL_TEAM_SECURITY'=>'Đội bảo mật',
'LBL_ASSIGNABLE'=>'Trợ lý',
'LBL_PERSON'=>'Cá nhân',
'LBL_COMPANY'=>'Công ty',
'LBL_ISSUE'=>'Issue',
'LBL_SALE'=>'Sale',
'LBL_FILE'=>'Tập tin',
'LBL_NAV_TAB'=>'Navigation Tab',
'LBL_CREATE'=>'Tạo ra',
'LBL_LIST'=>'Danh sách',
'LBL_LIST_VIEW'=>'Xem danh sách',
'LBL_HISTORY'=>'Xem lịch sử',
'LBL_ACTIVITIES'=>'Hoạt động',
'LBL_SEARCH'=>'Tìm kiếm',
'LBL_NEW'=>'Tin tức',
'LBL_TYPE_BASIC'=>'Cơ bản',
'LBL_TYPE_COMPANY'=>'Công ty',
'LBL_TYPE_PERSON'=>'Cá nhân',
'LBL_TYPE_ISSUE'=>'issue',
'LBL_TYPE_SALE'=>'sale',
'LBL_TYPE_FILE'=>'Tập tin',
'LBL_RSUB'=>'Đây là subpanel sẽ được xuất hiên trong module của cá nhân',
'LBL_MSUB'=>'This is the subpanel that your module provides to the related module for display',
'LBL_MB_IMPORTABLE'=>'Nhập vào',
'LBL_PACKAGE_WAS_DELETED'=>'[[Gói]] đã được xóa bỏ',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Tuỳ chỉnh xuất nhập ',
'LBL_EC_NAME'=>'Tên gói:',
'LBL_EC_AUTHOR'=>'Tác giả:',
'LBL_EC_DESCRIPTION'=>'Mô tả:',
'LBL_EC_KEY'=>'Khóa:',
'LBL_EC_CHECKERROR'=>'Hãy lựa chọn module.',
'LBL_EC_CUSTOMFIELD'=>'Chỉnh lý trường',
'LBL_EC_CUSTOMLAYOUT'=>'Chỉnh lý bố cục',
'LBL_EC_NOCUSTOM'=>'Không có module được chỉnh lý.',
'LBL_EC_EMPTYCUSTOM'=>'has empty customizations.',
'LBL_EC_EXPORTBTN'=>'Xuất ra',
'LBL_MODULE_DEPLOYED' => 'Module đã bị hủy.',
'LBL_UNDEFINED' => 'Không định nghĩa',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Dữ liệu nhận đã thất bại',
'LBL_AJAX_TIME_DEPENDENT' => 'Một thời gian phụ thuộc vào hành động trong tiến trình. Xin vui lòng chờ và thử lại trong một vài giây.',
'LBL_AJAX_LOADING' => 'Đang tải...',
'LBL_AJAX_DELETING' => 'Đang xóa...',
'LBL_AJAX_BUILDPROGRESS' => 'Xây dựng quá trình...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Hủy quá trình...',

//JS
'LBL_JS_REMOVE_PACKAGE' => 'Bạn có muốn xóa gói này? Điều này sẽ xoá vĩnh viễn tất cả các tập tin liên kết với các gói này.',

'LBL_DEPLOY_IN_PROGRESS' => 'Hủy bỏ gói',
'LBL_JS_VALIDATE_NAME'=>'Tên - Alphanumeric phải là không có dấu cách và bắt đầu với một văn bản',
'LBL_JS_VALIDATE_KEY'=>'Khóa - Alphanumeric phải là không có dấu cách và bắt đầu với một văn bản',
'LBL_JS_VALIDATE_LABEL'=>'Xin vui lòng nhập một nhãn sẽ được dùng như là hiển thị tên này dành cho module',
'LBL_JS_VALIDATE_TYPE'=>'Xin vui lòng chọn kiểu module bạn muốn xây dựng từ danh sách phía trên',
'LBL_JS_VALIDATE_REL_NAME'=>'Tên - Alphanumeric phải là không có dấu cách',
'LBL_JS_VALIDATE_REL_LABEL'=>'Nhãn - xin vui lòng thêm vào một nhãn mà sẽ được hiển thị ở phía trên của subpanel',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>'Xóa một lĩnh vực sẽ xóa tất cả các dữ liệu liên quan đến các lĩnh vực tùy chỉnh, và sẽ loại bỏ các lĩnh vực từ bất cứ bố trí bạn đã được thêm vào nó để',
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Bạn có chăc muốn xóa mối quan hệ này?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Điều này sẽ làm cho mối quan hệ này luôn tồn tại. Bạn có chắc là bạn muốn triển khai mối quan hệ này?',
'LBL_CONFIRM_DONT_SAVE' => 'Thay đổi đã được thực hiện từ lần cuối, bạn đã lưu, Bạn muốn lưu?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Lưu thay đổi?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Chọn loại dữ liệu thích hợp dựa trên các kiểu dữ liệu mà sẽ được nhập vào trường.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Đúng</b>: Các lĩnh vực sẽ bao gồm trong khi nhập.<br>
<b>Không</b>:Các lĩnh vực sẽ không được bao gồm trong khi nhập .<br>
<b>Yêu cầu</b>: Một giá trị cho các lĩnh vực cần phải được cung cấp trong khi nhập.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Kích hoạt</b>:Các lĩnh vực sẽ xuất hiện trong hợp nhất bản Sao tính năng, nhưng sẽ không có sẵn để sử dụng cho các bộ lọc điều kiện trong các tính năng tìm bản Sao.<br>
<b>Không kích hoạt</b>: Các lĩnh vực sẽ không xuất hiện trong bản Sao hợp nhất các tính năng, và sẽ không có sẵn để sử dụng cho các bộ lọc điều kiện trong các tính năng tìm bản Sao.'



,

'fieldTypes' => array(
				'varchar'=>'Kỹ tự', 
				'int'=>'Số nguyên', 
				'float'=>'Số thực',
				'bool'=>'Ô lựa chọn',
				'enum'=>'DropDown',
				'multienum' => 'Nhiều lựa chọn',
                'date'=>'Ngày', 
                'phone' => 'Điện thoại', 
                'currency' => 'Tiền tệ', 
                'html' => 'HTML', 
                'radioenum' => 'Radio',
                'relate' => 'Liên quan', 
                'address' => 'Địa chỉ', 
                'text' => 'TextArea', 
                'url' => 'Link', 
                'iframe' => 'IFrame', 
                'encrypt'=>'Mật mã'
),

'parent' => 'Liên quan Flex'
); 