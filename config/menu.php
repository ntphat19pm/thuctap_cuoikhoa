<?php
    return[
        [
            'label'=>'Home',
            'route'=>'admin.index',
            'icon'=>'fa-home'
        ],
        [
            'label'=>'Quản lý thông tin',
            'route'=>'admin.index',
            'icon'=>'fa-user-circle',
            'item'=>[
                [
                    'label'=>'Đăng xuất',
                    'route'=>'dangxuat'
                ],
                [
                    'label'=>'Thông tin cá nhân',
                    'route'=>'profile.index'
                ]
               
               
            ]
        ],

        

        [
            'label'=>'Quản lý khách hàng',
            'route'=>'khachhang.index',
            'icon'=>'fa-users'
            

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
                ],
                [
                    'label'=>'Tình trạng',
                    'route'=>'tinhtrang.index'
                ]
               
            ]
        ],
        [
            'label'=>'Quản lý sản phẩm',
            'route'=>'sanpham.index',
            'icon'=>'fa-tshirt'

        ],
        
        [
            'label'=>' Quản lý nhân viên',
            'route'=>'admin.index',
            'icon'=>'fa-users-cog',
            'item' =>[
                [
                    'label'=>'Nhân viên',
                    'route'=>'nhanvien.index'
                ],
                [
                    'label'=>'Chức vụ',
                    'route'=>'chucvu.index'
                ]
            ]

        ],
        [
            'label'=>' Cài đặt',
            'route'=>'admin.index',
            'icon'=>'fa-users-cog',
            'item' =>[
                [
                    'label'=>'Thông tin cửa hàng',
                    'route'=>'lienhe.index'
                ],
                [
                    'label'=>'Các menu',
                    'route'=>'menu.index'
                ]
            ]

        ],
        [
            'label'=>' Quản lý blog',
            'route'=>'admin.index',
            'icon'=>'fa-file-video',
            'item' =>[
                [
                    'label'=>'Video',
                    'route'=>'video.index'
                ],
                [
                    'label'=>'Bài viết',
                    'route'=>'baiviet.index'
                ]
            ]

        ]


    ]


?>