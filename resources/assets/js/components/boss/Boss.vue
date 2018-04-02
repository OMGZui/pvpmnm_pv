<template>
    <div class="table">
        <div class="crumbs">
            <el-breadcrumb separator="/">
                <el-breadcrumb-item>
                    <i class="el-icon-menu"></i> 招聘</el-breadcrumb-item>
                <el-breadcrumb-item>Boss直聘</el-breadcrumb-item>
            </el-breadcrumb>
        </div>
        <el-table :data="tableData" style="width: 100%">
            <el-table-column prop="job_name" label="岗位名字" width="180">
            </el-table-column>
            <el-table-column prop="money_min" label="最低">
            </el-table-column>
            <el-table-column prop="money_max" label="最高">
            </el-table-column>
            <el-table-column prop="address" label="地址">
            </el-table-column>
            <el-table-column prop="company_name" label="公司名字">
            </el-table-column>
            <el-table-column prop="boss_type" label="职位类型">
            </el-table-column>
        </el-table>
        <div class="pagination">
            <el-pagination 
                background 
                @current-change="handleCurrentChange" 
                layout="prev, pager, next"
                :total="1000">
            </el-pagination>
        </div>
    </div>

</template>

<script>
    export default {
        data: function () {
            return {
                tableData: [],
                cur_page: 1
            };
        },
        created: function () {
            this.getData();
        },
        methods: {
            getData: function () {
                console.log(this.cur_page);
                this.$http.get(`/boss?page=${this.cur_page}`).then((res) => {
                    this.tableData = res.data.result.data;
                    // console.log(res);
                })
            },
            handleCurrentChange: function (val) {
                this.cur_page = val;
                this.getData();
            }
        }
    };
</script>

<style scoped>
</style>
