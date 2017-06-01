<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_325a0164ab02f80d8652bbe2882bbe151121b7924e61f123a406c1ebe04238c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0059efe3b76bdb365d58fcbea4719809441958239d5242042f222881c2254463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0059efe3b76bdb365d58fcbea4719809441958239d5242042f222881c2254463->enter($__internal_0059efe3b76bdb365d58fcbea4719809441958239d5242042f222881c2254463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_43770303b4a6055aca65ba2ce82a17395c342db92d0c7af2c960e16429234225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43770303b4a6055aca65ba2ce82a17395c342db92d0c7af2c960e16429234225->enter($__internal_43770303b4a6055aca65ba2ce82a17395c342db92d0c7af2c960e16429234225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0059efe3b76bdb365d58fcbea4719809441958239d5242042f222881c2254463->leave($__internal_0059efe3b76bdb365d58fcbea4719809441958239d5242042f222881c2254463_prof);

        
        $__internal_43770303b4a6055aca65ba2ce82a17395c342db92d0c7af2c960e16429234225->leave($__internal_43770303b4a6055aca65ba2ce82a17395c342db92d0c7af2c960e16429234225_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6badfbc9dd1762e363711648a9463392264199add3ef543339ffb7e0b2c731a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6badfbc9dd1762e363711648a9463392264199add3ef543339ffb7e0b2c731a4->enter($__internal_6badfbc9dd1762e363711648a9463392264199add3ef543339ffb7e0b2c731a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_03e818693b2cf6dcb35041ee86ff64e7b9dcc1b5b39373a0c4f8e4185a9642cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e818693b2cf6dcb35041ee86ff64e7b9dcc1b5b39373a0c4f8e4185a9642cf->enter($__internal_03e818693b2cf6dcb35041ee86ff64e7b9dcc1b5b39373a0c4f8e4185a9642cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_03e818693b2cf6dcb35041ee86ff64e7b9dcc1b5b39373a0c4f8e4185a9642cf->leave($__internal_03e818693b2cf6dcb35041ee86ff64e7b9dcc1b5b39373a0c4f8e4185a9642cf_prof);

        
        $__internal_6badfbc9dd1762e363711648a9463392264199add3ef543339ffb7e0b2c731a4->leave($__internal_6badfbc9dd1762e363711648a9463392264199add3ef543339ffb7e0b2c731a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
