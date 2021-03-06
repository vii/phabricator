<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

final class DiffusionBranchInformation {

  const DEFAULT_GIT_REMOTE = 'origin';

  private $name;
  private $headCommitIdentifier;

  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  public function getName() {
    return $this->name;
  }

  public function setHeadCommitIdentifier($head_commit_identifier) {
    $this->headCommitIdentifier = $head_commit_identifier;
    return $this;
  }

  public function getHeadCommitIdentifier() {
    return $this->headCommitIdentifier;
  }

}
