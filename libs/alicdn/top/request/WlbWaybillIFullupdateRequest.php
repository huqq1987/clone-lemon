<?php
/**
 * TOP API: taobao.wlb.waybill.i.fullupdate request
 * 
 * @author auto create
 * @since 1.0, 2014-11-28 17:28:31
 */
class WlbWaybillIFullupdateRequest
{
	/** 
	 * 更新面单信息请求
	 **/
	private $waybillApplyFullUpdateRequest;
	
	private $apiParas = array();
	
	public function setWaybillApplyFullUpdateRequest($waybillApplyFullUpdateRequest)
	{
		$this->waybillApplyFullUpdateRequest = $waybillApplyFullUpdateRequest;
		$this->apiParas["waybill_apply_full_update_request"] = $waybillApplyFullUpdateRequest;
	}

	public function getWaybillApplyFullUpdateRequest()
	{
		return $this->waybillApplyFullUpdateRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.i.fullupdate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->waybillApplyFullUpdateRequest,"waybillApplyFullUpdateRequest");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
