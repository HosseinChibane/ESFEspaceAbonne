<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1b2be407181ca8d4f01e79d1329d431d76524db4432130e90d38608a60a0b484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7be335953f048e5541dc26f3dc26850b8623c68738ba3356ea5283ff496cbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7be335953f048e5541dc26f3dc26850b8623c68738ba3356ea5283ff496cbb9->enter($__internal_a7be335953f048e5541dc26f3dc26850b8623c68738ba3356ea5283ff496cbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_1a7fb1caa82a863037a2754a9e6e39b14b01b4da2f7559e9ee69acabfc88cb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7fb1caa82a863037a2754a9e6e39b14b01b4da2f7559e9ee69acabfc88cb58->enter($__internal_1a7fb1caa82a863037a2754a9e6e39b14b01b4da2f7559e9ee69acabfc88cb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7be335953f048e5541dc26f3dc26850b8623c68738ba3356ea5283ff496cbb9->leave($__internal_a7be335953f048e5541dc26f3dc26850b8623c68738ba3356ea5283ff496cbb9_prof);

        
        $__internal_1a7fb1caa82a863037a2754a9e6e39b14b01b4da2f7559e9ee69acabfc88cb58->leave($__internal_1a7fb1caa82a863037a2754a9e6e39b14b01b4da2f7559e9ee69acabfc88cb58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b7e8cc5c61b5ec35c67b35433e3a9e5b3f1706e7f6d3f25cda675ee163f8eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7e8cc5c61b5ec35c67b35433e3a9e5b3f1706e7f6d3f25cda675ee163f8eb9->enter($__internal_5b7e8cc5c61b5ec35c67b35433e3a9e5b3f1706e7f6d3f25cda675ee163f8eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27548ba8455fdbf26ea3bbaa0c616d056a986052bdadadc3ced0c2c5bab55afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27548ba8455fdbf26ea3bbaa0c616d056a986052bdadadc3ced0c2c5bab55afd->enter($__internal_27548ba8455fdbf26ea3bbaa0c616d056a986052bdadadc3ced0c2c5bab55afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_27548ba8455fdbf26ea3bbaa0c616d056a986052bdadadc3ced0c2c5bab55afd->leave($__internal_27548ba8455fdbf26ea3bbaa0c616d056a986052bdadadc3ced0c2c5bab55afd_prof);

        
        $__internal_5b7e8cc5c61b5ec35c67b35433e3a9e5b3f1706e7f6d3f25cda675ee163f8eb9->leave($__internal_5b7e8cc5c61b5ec35c67b35433e3a9e5b3f1706e7f6d3f25cda675ee163f8eb9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
