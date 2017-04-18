<?php
/**
 * ��ҳ��
 * 
 * ���÷�ʽ��
 * $p=new Page(��ҳ��,��ʾҳ��,��ǰҳ��,ÿҳ��ʾ����,[����]);
 * print_r($p->getPages()); //����һ��ҳ�����飨��Ϊҳ�룬ֵΪ���ӣ�
 * echo $p->showPages(1);    //����һ��ҳ����ʽ��������Զ�����ʽ��
 * 
 * @author: Dzer <Email:358654744@qq.com Blog:Dzer.me>
 * @version: 2014-12-25 09:09:42
 * @Last Modified time: 2014-12-28 17:37:13
 */
 
/*
˼·��
����һ�� ��ҳ������Ҫ��ʾ��ҳ������ǰҳ��ÿҳ��ʾ������������
дһ������ ����һ��һά���飬��Ϊҳ�� ֵΪ����
дһ������ ����һ�����ɺ���ʽ��ҳ�루���ҿ��Ը����Լ���Ҫ�����ʽ��
Ĭ����ʽ ��45����¼,ÿҳ��ʾ10��,��ǰ��1/4ҳ [��ҳ] [��ҳ] [1] [2] [3] .. [��ҳ] [βҳ]
*/
class Page{
    protected $count;       //������
    protected $showPages;   //��Ҫ��ʾ��ҳ��
    protected $countPages;  //��ҳ��
    protected $currPage;    //��ǰҳ
    protected $subPages;    //ÿҳ��ʾ����
    protected $href;        //����
    protected $page_arr=array();    //�������ɵ�ҳ�� ��ҳ�� ֵΪ����
 
    /**
     * __construct  ���캯������ȡ��ҳ���������
     * @param int $count     ������
     * @param int $showPages ��ʾҳ��
     * @param int $currPage  ��ǰҳ��
     * @param int $subPages  ÿҳ��ʾ����
     * @param string $href   ���ӣ����������ȡ��ǰURL��
     */
    public function __construct($count,$showPages,$currPage,$subPages,$href=''){
        $this->count=$count;
        $this->showPages=$showPages;
        $this->currPage=$currPage;
        $this->subPages=$subPages;
         
        //�������û���������ȡ��ǰ����
        if(empty($href)){
            $this->href=htmlentities($_SERVER['PHP_SELF']); 
        }else{
            $this->href=$href;
        }
        $this->construct_Pages();
    }
 
    /**
     * getPages ����ҳ������
     * @return array һά���� ��Ϊҳ�� ֵΪ����
     */
    public function getPages(){
        return $this->page_arr;
    }
 
    /**
     * showPages �������ɺõ�ҳ��
     * @param  int $style ��ʽ
     * @return string     ���ɺõ�ҳ��
     */
    public function showPages($style=1){
        $func='pageStyle'.$style;
        return $this->$func();
    }
 
    /**
     * pageStyle1 ��ҳ��ʽ���ɲ����������Զ�����ʽ ����pageStyle2������
     * ��ʽ ��45����¼,ÿҳ��ʾ10��,��ǰ��1/4ҳ [��ҳ] [��ҳ] [1] [2] [3] .. [��ҳ] [βҳ] 
     * @return string 
     */
    protected function pageStyle1(){
        /* ������ͨģʽ�ķ�ҳ 
        ��4523����¼,ÿҳ��ʾ10��,��ǰ��1/453ҳ [��ҳ] [��ҳ] [1] [2] [3] .. [��ҳ] [βҳ] 
        */
        $pageStr='��'.$this->count.'����¼��ÿҳ��ʾ'.$this->subPages.'��';
        $pageStr.='��ǰ��'.$this->currPage.'/'.$this->countPages.'ҳ ';
 
        $_GET['page'] = 1;
        $pageStr.='<span>[<a href="'.$this->href.'?'.http_build_query($_GET).'">��ҳ</a>] </span>';
        //�����ǰҳ���ǵ�һҳ����ʾ��ҳ
        if($this->currPage>1){
            $_GET['page'] = $this->currPage-1;
            $pageStr.='<span>[<a href="'.$this->href.'?'.http_build_query($_GET).'">��ҳ</a>] </span>';
        }
 
        foreach ($this->page_arr as $k => $v) {
            $_GET['page'] = $k;
            $pageStr.='<span>[<a href="'.$v.'">'.$k.'</a>] </span>';
        }
 
        //�����ǰҳС����ҳ������ʾ��һҳ
        if($this->currPage<$this->countPages){
            $_GET['page'] = $this->currPage+1;
            $pageStr.='<span>[<a href="'.$this->href.'?'.http_build_query($_GET).'">��ҳ</a>] </span>';
        }
 
        $_GET['page'] = $this->countPages;
        $pageStr.='<span>[<a href="'.$this->href.'?'.http_build_query($_GET).'">βҳ</a>] </span>';
 
        return $pageStr;
    }
 
    /**
     * construct_Pages ����ҳ������
     * ��Ϊҳ�룬ֵΪ����
     * $this->page_arr=Array(
     *                  [1] => index.php?page=1
     *                  [2] => index.php?page=2
     *                  [3] => index.php?page=3
     *                  ......)
     */
    protected function construct_Pages(){
        //������ҳ��
        $this->countPages=ceil($this->count/$this->subPages);
        //���ݵ�ǰҳ����ǰ��ҳ��
        $leftPage_num=floor($this->showPages/2);
        $rightPage_num=$this->showPages-$leftPage_num;
 
        //�����ʾ��Ϊ��ǰҳ����߸���ʾ���� ��������ʾ7ҳ ��ǰҳ��5  �����СΪ5-3  �ұ�Ϊ5+3
        $left=$this->currPage-$leftPage_num;
        $left=max($left,1); //�����С����С��1
        $right=$left+$this->showPages-1; //��߼���ʾҳ����1�����ұ���ʾ��
        $right=min($right,$this->countPages);  //�ұ�����ܴ�����ҳ��
        $left=max($right-$this->showPages+1,1); //ȷ���ұ��ټ�����ߣ�������μ���
         
        for ($i=$left; $i <= $right; $i++) {
            $_GET['page'] = $i;
            $this->page_arr[$i]=$this->href.'?'.http_build_query($_GET);
        }
    }
}