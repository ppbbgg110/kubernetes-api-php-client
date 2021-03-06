<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@devstub.com>
 * @link http://www.devstub.com/
 * @copyright 2014 binarygoo / devstub.com
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace DevStub\KubernetesAPIClient\Entity\v1beta1;


use DevStub\KubernetesAPIClient\Entity\BaseEntity;

class VolumeSource  extends BaseEntity implements \JsonSerializable {

    protected $hostDir;

    protected $emptyDir;

    protected $persistentDisk;

    protected $gitRepo;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\EmptyDir
     */
    public function getEmptyDir() {
        return $this->emptyDir;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\EmptyDir $emptyDir
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\EmptyDir
     */
    public function setEmptyDir($emptyDir = self::UNIQUE_DEFAULT) {
        if ($emptyDir === self::UNIQUE_DEFAULT) {
            $emptyDir = new EmptyDir();
            $emptyDir->_setEntityCallback([$this,__METHOD__]);
        }
        $this->emptyDir = $emptyDir;
        return $this->emptyDir;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\GitRepo
     */
    public function getGitRepo() {
        return $this->gitRepo;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\GitRepo $gitRepo
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\GitRepo
     */
    public function setGitRepo($gitRepo = self::UNIQUE_DEFAULT) {
        if ($gitRepo === self::UNIQUE_DEFAULT) {
            $gitRepo = new GitRepo();
            $gitRepo->_setEntityCallback([$this,__METHOD__]);
        }
        $this->gitRepo = $gitRepo;
        return $this->gitRepo;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\HostDir
     */
    public function getHostDir() {
        return $this->hostDir;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\HostDir $hostDir
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\HostDir
     */
    public function setHostDir($hostDir = self::UNIQUE_DEFAULT) {
        if ($hostDir === self::UNIQUE_DEFAULT) {
            $hostDir = new HostDir();
            $hostDir->_setEntityCallback([$this,__METHOD__]);
        }
        $this->hostDir = $hostDir;
        return $this->hostDir;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\GCEPersistentDisk
     */
    public function getPersistentDisk() {
        return $this->persistentDisk;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\GCEPersistentDisk $persistentDisk
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\GCEPersistentDisk
     */
    public function setPersistentDisk($persistentDisk = self::UNIQUE_DEFAULT) {
        if ($persistentDisk === self::UNIQUE_DEFAULT) {
            $persistentDisk = new GCEPersistentDisk();
            $persistentDisk->_setEntityCallback([$this,__METHOD__]);
        }
        $this->persistentDisk = $persistentDisk;
        return  $this->persistentDisk;
    }


}