<template>
    <div class="sidebar">
        <el-menu :default-active="onRoutes" class="el-menu-vertical-demo"
        background-color="#545c64"
        text-color="#fff"
        active-text-color="#ffd04b" unique-opened router>
            <template v-for="item in items">
                <template v-if="item.subs">
                    <el-submenu :index="item.index">
                        <template slot="title"><i :class="item.icon"></i>{{ item.title }}</template>
                        <el-menu-item v-for="(subItem,i) in item.subs" :key="i" :index="subItem.index">{{ subItem.title }}
                        </el-menu-item>
                    </el-submenu>
                </template>
                <template v-else>
                    <el-menu-item :index="item.index">
                        <i :class="item.icon"></i>{{ item.title }}
                    </el-menu-item>
                </template>
            </template>
        </el-menu>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                items: [
                    {
                        icon: 'el-icon-setting',
                        index: '/home',
                        title: '自述'
                    },
                    {
                        icon: 'el-icon-phone',
                        index: '1',
                        title: '招聘',
                        subs: [
                            {
                                index: '/home/boss',
                                title: 'boss直聘'
                            }
                        ]
                    },
                    {
                        icon: 'el-icon-bell',
                        index: '2',
                        title: '微博',
                        subs: [
                            {
                                index: '/home/weibo',
                                title: '微博'
                            }
                        ]
                    },
                    {
                        icon: 'el-icon-star-on',
                        index: '3',
                        title: '知乎',
                        subs: [
                            {
                                index: '/home/zhihu',
                                title: '知乎'
                            }
                        ]
                    },
                    {
                        icon: 'el-icon-star-off',
                        index: '4',
                        title: '豆瓣',
                        subs: [
                            {
                                index: '/home/douban',
                                title: '豆瓣'
                            }
                        ]
                    },
                    {
                        icon: 'el-icon-loading',
                        index: '5',
                        title: 'porn',
                        subs: [
                            {
                                index: '/home/porn',
                                title: 'porn'
                            }
                        ]
                    },
                ]
            }
        },
        computed:{
            onRoutes(){
                return this.$route.path.replace('/','');
            }
        }
    }
</script>

<style scoped>
    .sidebar{
        display: block;
        position: absolute;
        width: 250px;
        left: 0;
        top: 70px;
        bottom:0;
        background: #2E363F;
    }
    .sidebar > ul {
        height:100%;
    }
</style>
