<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/unmanaged_container_model.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class UnmanagedContainerModel
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/aiplatform/v1/unmanaged_container_model.protogoogle.cloud.aiplatform.v1&google/cloud/aiplatform/v1/model.proto"�
UnmanagedContainerModel
artifact_uri (	E
predict_schemata (2+.google.cloud.aiplatform.v1.PredictSchemataK
container_spec (2..google.cloud.aiplatform.v1.ModelContainerSpecB�AB�
com.google.cloud.aiplatform.v1BUnmanagedContainerModelProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

