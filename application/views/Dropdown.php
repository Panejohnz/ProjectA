
                              <div>เลือกสิ</div>
                                    <select name="Cate" id="Cate" onChange="change()" >
                                    <?php
                                        $this->db->select('category_name,id');                                        
                                        $province = $this->db->get('category_tb');                                        
                                        foreach($province->result_array() as $d)
                                        {
                                            ?>
                                            <option value="<?=$d['id']?>"><?=trim($d['category_name'])?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <select name="Pro" id="Pro">

                                    </select>
                                </div>