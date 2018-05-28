<?php

/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace JMS\DiExtraBundle\Tests\Functional\Bundle\LegacyTestBundle\Controller;

use JMS\DiExtraBundle\Annotation as DI;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class SecuredController
{
    /**
     * @Route("/lookup-method-and-aop")
     * @Security("has_role('ROLE_FOO')")
     */
    public function secureAction()
    {
        throw new \Exception('Should never be called');
    }

    /** @DI\LookupMethod */
    protected function getTestMailer()
    {
    }
}
