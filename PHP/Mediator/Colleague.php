<?php
/**
 *
 * @author shain
 */
interface Colleague {
    public abstract function setMediator(Mediator $mediator);
    public abstract function setColleagueEnabled($enabled);
}
