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
        $__internal_6566a51024239085041c39ab50daefd09a95ef064529ea072160ca531de2420d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6566a51024239085041c39ab50daefd09a95ef064529ea072160ca531de2420d->enter($__internal_6566a51024239085041c39ab50daefd09a95ef064529ea072160ca531de2420d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c3ea1df8581cfe9134502b082808f1334463fe6fc709616a37a8bca3bfbf5f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ea1df8581cfe9134502b082808f1334463fe6fc709616a37a8bca3bfbf5f67->enter($__internal_c3ea1df8581cfe9134502b082808f1334463fe6fc709616a37a8bca3bfbf5f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6566a51024239085041c39ab50daefd09a95ef064529ea072160ca531de2420d->leave($__internal_6566a51024239085041c39ab50daefd09a95ef064529ea072160ca531de2420d_prof);

        
        $__internal_c3ea1df8581cfe9134502b082808f1334463fe6fc709616a37a8bca3bfbf5f67->leave($__internal_c3ea1df8581cfe9134502b082808f1334463fe6fc709616a37a8bca3bfbf5f67_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_32ab2e89a86e23f2a241909fe36d88bdcfe9c001090c0026cb3731e807791350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ab2e89a86e23f2a241909fe36d88bdcfe9c001090c0026cb3731e807791350->enter($__internal_32ab2e89a86e23f2a241909fe36d88bdcfe9c001090c0026cb3731e807791350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5501a95917debb744b44c0cd1e9d4d22e1701f8ac7fa67aeb6f26dfcd461c095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5501a95917debb744b44c0cd1e9d4d22e1701f8ac7fa67aeb6f26dfcd461c095->enter($__internal_5501a95917debb744b44c0cd1e9d4d22e1701f8ac7fa67aeb6f26dfcd461c095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5501a95917debb744b44c0cd1e9d4d22e1701f8ac7fa67aeb6f26dfcd461c095->leave($__internal_5501a95917debb744b44c0cd1e9d4d22e1701f8ac7fa67aeb6f26dfcd461c095_prof);

        
        $__internal_32ab2e89a86e23f2a241909fe36d88bdcfe9c001090c0026cb3731e807791350->leave($__internal_32ab2e89a86e23f2a241909fe36d88bdcfe9c001090c0026cb3731e807791350_prof);

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
