<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job.proto

namespace Google\Cloud\Talent\V4\Job;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Debugging information for internal users.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.Job.JobDebugInfo</code>
 */
class JobDebugInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Job Status.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Job.JobDebugInfo.JobStatus status = 1;</code>
     */
    private $status = 0;
    /**
     * Soc Beliefs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.Job.JobDebugInfo.SocBelief soc_beliefs = 2;</code>
     */
    private $soc_beliefs;
    /**
     * project id.
     *
     * Generated from protobuf field <code>string project_id = 3;</code>
     */
    private $project_id = '';
    /**
     * distributor id
     *
     * Generated from protobuf field <code>string distributor_id = 4;</code>
     */
    private $distributor_id = '';
    /**
     * tenant id.
     *
     * Generated from protobuf field <code>string tenant_id = 5;</code>
     */
    private $tenant_id = '';
    /**
     * project number
     *
     * Generated from protobuf field <code>int64 project_number = 6;</code>
     */
    private $project_number = 0;
    /**
     * Job Classifications
     *
     * Generated from protobuf field <code>repeated string job_classifications = 7;</code>
     */
    private $job_classifications;
    /**
     * Seniority
     *
     * Generated from protobuf field <code>string seniority = 8;</code>
     */
    private $seniority = '';
    /**
     * Confidence Scores
     *
     * Generated from protobuf field <code>repeated double confidence_scores = 9;</code>
     */
    private $confidence_scores;
    /**
     * Last Update TIme
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 10;</code>
     */
    private $last_update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *           Job Status.
     *     @type \Google\Cloud\Talent\V4\Job\JobDebugInfo\SocBelief[]|\Google\Protobuf\Internal\RepeatedField $soc_beliefs
     *           Soc Beliefs.
     *     @type string $project_id
     *           project id.
     *     @type string $distributor_id
     *           distributor id
     *     @type string $tenant_id
     *           tenant id.
     *     @type int|string $project_number
     *           project number
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $job_classifications
     *           Job Classifications
     *     @type string $seniority
     *           Seniority
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $confidence_scores
     *           Confidence Scores
     *     @type \Google\Protobuf\Timestamp $last_update_time
     *           Last Update TIme
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * Job Status.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Job.JobDebugInfo.JobStatus status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Job Status.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Job.JobDebugInfo.JobStatus status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4\Job\JobDebugInfo\JobStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Soc Beliefs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.Job.JobDebugInfo.SocBelief soc_beliefs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSocBeliefs()
    {
        return $this->soc_beliefs;
    }

    /**
     * Soc Beliefs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.Job.JobDebugInfo.SocBelief soc_beliefs = 2;</code>
     * @param \Google\Cloud\Talent\V4\Job\JobDebugInfo\SocBelief[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSocBeliefs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Talent\V4\Job\JobDebugInfo\SocBelief::class);
        $this->soc_beliefs = $arr;

        return $this;
    }

    /**
     * project id.
     *
     * Generated from protobuf field <code>string project_id = 3;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * project id.
     *
     * Generated from protobuf field <code>string project_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * distributor id
     *
     * Generated from protobuf field <code>string distributor_id = 4;</code>
     * @return string
     */
    public function getDistributorId()
    {
        return $this->distributor_id;
    }

    /**
     * distributor id
     *
     * Generated from protobuf field <code>string distributor_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDistributorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->distributor_id = $var;

        return $this;
    }

    /**
     * tenant id.
     *
     * Generated from protobuf field <code>string tenant_id = 5;</code>
     * @return string
     */
    public function getTenantId()
    {
        return $this->tenant_id;
    }

    /**
     * tenant id.
     *
     * Generated from protobuf field <code>string tenant_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTenantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant_id = $var;

        return $this;
    }

    /**
     * project number
     *
     * Generated from protobuf field <code>int64 project_number = 6;</code>
     * @return int|string
     */
    public function getProjectNumber()
    {
        return $this->project_number;
    }

    /**
     * project number
     *
     * Generated from protobuf field <code>int64 project_number = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProjectNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->project_number = $var;

        return $this;
    }

    /**
     * Job Classifications
     *
     * Generated from protobuf field <code>repeated string job_classifications = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobClassifications()
    {
        return $this->job_classifications;
    }

    /**
     * Job Classifications
     *
     * Generated from protobuf field <code>repeated string job_classifications = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobClassifications($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->job_classifications = $arr;

        return $this;
    }

    /**
     * Seniority
     *
     * Generated from protobuf field <code>string seniority = 8;</code>
     * @return string
     */
    public function getSeniority()
    {
        return $this->seniority;
    }

    /**
     * Seniority
     *
     * Generated from protobuf field <code>string seniority = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSeniority($var)
    {
        GPBUtil::checkString($var, True);
        $this->seniority = $var;

        return $this;
    }

    /**
     * Confidence Scores
     *
     * Generated from protobuf field <code>repeated double confidence_scores = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfidenceScores()
    {
        return $this->confidence_scores;
    }

    /**
     * Confidence Scores
     *
     * Generated from protobuf field <code>repeated double confidence_scores = 9;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfidenceScores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->confidence_scores = $arr;

        return $this;
    }

    /**
     * Last Update TIme
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastUpdateTime()
    {
        return $this->last_update_time;
    }

    public function hasLastUpdateTime()
    {
        return isset($this->last_update_time);
    }

    public function clearLastUpdateTime()
    {
        unset($this->last_update_time);
    }

    /**
     * Last Update TIme
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_update_time = $var;

        return $this;
    }

}


