<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/annotation_spec.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class AnnotationSpec
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/automl/v1beta1/annotation_spec.protogoogle.cloud.automl.v1beta1"�
AnnotationSpec
name (	
display_name (	

$automl.googleapis.com/AnnotationSpec\\projects/{project}/locations/{location}/datasets/{dataset}/annotationSpecs/{annotation_spec}B�
com.google.cloud.automl.v1beta1PZAgoogle.golang.org/genproto/googleapis/cloud/automl/v1beta1;automl�Google\\Cloud\\AutoMl\\V1beta1�Google::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
