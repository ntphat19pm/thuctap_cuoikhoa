<?php
    return[
        [
            'label'=>'Home',
            'route'=>'admin.index',
            'icon'=>'fa-home'
        ],
        [
            'label'=>'Quản lý khách hàng',
            'route'=>'doanhnghiep.index',
            'icon'=>'fa-user-tie'

        ],
        [
            'label'=>'Quản lý đối tác',
            'route'=>'doitac.index',
            'icon'=>'fa-address-card'
        ],
        [
            'label'=>' Chuyển đổi số',
            'route'=>'admin.index',
            'icon'=>'fa-briefcase',
            'item' =>[
                [
                    'label'=>'Danh mục chuyển đổi số',
                    'route'=>'danhmuc_chuyendoi.index'
                ],
                [
                    'label'=>'Dịch vụ chuyển đổi số',
                    'route'=>'dichvu_chuyendoi.index'
                ],
                [
                    'label'=>'Nhận xét của đối tác',
                    'route'=>'review.index'
                ],
                [
                    'label'=>'Liên hệ chuyển đổi số',
                    'route'=>'lienhe_chuyendoi.index'
                ]
            ]

        ],        

        [
            'label'=>'Quản lý thuộc tính',
            'route'=>'admin.index',
            'icon'=>'fa-tags',
            'item'=>[
                [
                    'label'=>'Danh mục sản phẩm',
                    'route'=>'danhmuc.index'
                ],
                [
                    'label'=>'Đặc điểm',
                    'route'=>'dacdiem.index'
                ],
                [
                    'label'=>'Tính năng',
                    'route'=>'tinhnang.index'
                ],
                [
                    'label'=>'Lợi ích',
                    'route'=>'loiich.index'
                ]
               
            ]
        ],
        [
            'label'=>'Quản lý sản phẩm',
            'route'=>'sanpham.index',
            'icon'=>'fa-microchip'

        ],
        [
            'label'=>'Quản lý thông tin',
            'route'=>'thongtin.index',
            'icon'=>'fa-phone-volume'

        ],
        [
            'label'=>'Quản lý câu hỏi',
            'route'=>'cauhoi.index',
            'icon'=>'fa-question'

        ],
        [
            'label'=>'Chỉ tiêu - Chương trình',
            'route'=>'admin.index',
            'icon'=>'fa-chart-line',
            'item'=>[
                [
                    'label'=>'Thực hiện chỉ tiêu',
                    'route'=>'thuchien_chitieu.index'
                ],
                [
                    'label'=>'Chương trình hành động',
                    'route'=>'chuongtrinh.index'
                ]
               
            ]
        ], 
        [
            'label'=>' Cài đặt',
            'route'=>'admin.index',
            'icon'=>'fa-wrench',
            'item' =>[
                [
                    'label'=>'Quản lý slider',
                    'route'=>'slider.index'
                ]
            ]

        ]


    ]


?>