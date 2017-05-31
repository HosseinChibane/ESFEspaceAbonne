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
        $__internal_871468eb58e5f9cf339790ee11e313f912dee9ccd80ff0849a60a3fcb0d538d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871468eb58e5f9cf339790ee11e313f912dee9ccd80ff0849a60a3fcb0d538d3->enter($__internal_871468eb58e5f9cf339790ee11e313f912dee9ccd80ff0849a60a3fcb0d538d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d0e596010b285abc42452e9d98d427f3ebe221a57cce2210cd29d4b2b43f3ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e596010b285abc42452e9d98d427f3ebe221a57cce2210cd29d4b2b43f3ae2->enter($__internal_d0e596010b285abc42452e9d98d427f3ebe221a57cce2210cd29d4b2b43f3ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_871468eb58e5f9cf339790ee11e313f912dee9ccd80ff0849a60a3fcb0d538d3->leave($__internal_871468eb58e5f9cf339790ee11e313f912dee9ccd80ff0849a60a3fcb0d538d3_prof);

        
        $__internal_d0e596010b285abc42452e9d98d427f3ebe221a57cce2210cd29d4b2b43f3ae2->leave($__internal_d0e596010b285abc42452e9d98d427f3ebe221a57cce2210cd29d4b2b43f3ae2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a22d99b2ba8582f3a9cf6208b5868f92f7e26d7e07e4a54a2cc19d4a9a82078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a22d99b2ba8582f3a9cf6208b5868f92f7e26d7e07e4a54a2cc19d4a9a82078->enter($__internal_9a22d99b2ba8582f3a9cf6208b5868f92f7e26d7e07e4a54a2cc19d4a9a82078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_561659e00c13338347d62b3c98a7273a66cbfd88e164551f0ff7bdb83771bf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561659e00c13338347d62b3c98a7273a66cbfd88e164551f0ff7bdb83771bf7c->enter($__internal_561659e00c13338347d62b3c98a7273a66cbfd88e164551f0ff7bdb83771bf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_561659e00c13338347d62b3c98a7273a66cbfd88e164551f0ff7bdb83771bf7c->leave($__internal_561659e00c13338347d62b3c98a7273a66cbfd88e164551f0ff7bdb83771bf7c_prof);

        
        $__internal_9a22d99b2ba8582f3a9cf6208b5868f92f7e26d7e07e4a54a2cc19d4a9a82078->leave($__internal_9a22d99b2ba8582f3a9cf6208b5868f92f7e26d7e07e4a54a2cc19d4a9a82078_prof);

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
