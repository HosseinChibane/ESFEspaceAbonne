<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f24177dcb61cbfb5f81db4058b5586bed868b99eec9ef2e9fe615da7b7c76b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_14485de5df73610fc9dec410aa6ec5f1a2e4c1cc5c98459eb9f2ac91f45c06a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14485de5df73610fc9dec410aa6ec5f1a2e4c1cc5c98459eb9f2ac91f45c06a1->enter($__internal_14485de5df73610fc9dec410aa6ec5f1a2e4c1cc5c98459eb9f2ac91f45c06a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_bb7fe613a6e2ff8bb95c92e2f662d456458f120f1ab758e3ca82a2a652e6a621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7fe613a6e2ff8bb95c92e2f662d456458f120f1ab758e3ca82a2a652e6a621->enter($__internal_bb7fe613a6e2ff8bb95c92e2f662d456458f120f1ab758e3ca82a2a652e6a621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14485de5df73610fc9dec410aa6ec5f1a2e4c1cc5c98459eb9f2ac91f45c06a1->leave($__internal_14485de5df73610fc9dec410aa6ec5f1a2e4c1cc5c98459eb9f2ac91f45c06a1_prof);

        
        $__internal_bb7fe613a6e2ff8bb95c92e2f662d456458f120f1ab758e3ca82a2a652e6a621->leave($__internal_bb7fe613a6e2ff8bb95c92e2f662d456458f120f1ab758e3ca82a2a652e6a621_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8874f3b7149cd4930a4439a49e7f0dc88aeecd3a4d59911a57efd066e136b007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8874f3b7149cd4930a4439a49e7f0dc88aeecd3a4d59911a57efd066e136b007->enter($__internal_8874f3b7149cd4930a4439a49e7f0dc88aeecd3a4d59911a57efd066e136b007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41894eb09ce9e0b58f8db36eb60dc2a7a1583c21395d6fb847092f2b7d489e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41894eb09ce9e0b58f8db36eb60dc2a7a1583c21395d6fb847092f2b7d489e20->enter($__internal_41894eb09ce9e0b58f8db36eb60dc2a7a1583c21395d6fb847092f2b7d489e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_41894eb09ce9e0b58f8db36eb60dc2a7a1583c21395d6fb847092f2b7d489e20->leave($__internal_41894eb09ce9e0b58f8db36eb60dc2a7a1583c21395d6fb847092f2b7d489e20_prof);

        
        $__internal_8874f3b7149cd4930a4439a49e7f0dc88aeecd3a4d59911a57efd066e136b007->leave($__internal_8874f3b7149cd4930a4439a49e7f0dc88aeecd3a4d59911a57efd066e136b007_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
