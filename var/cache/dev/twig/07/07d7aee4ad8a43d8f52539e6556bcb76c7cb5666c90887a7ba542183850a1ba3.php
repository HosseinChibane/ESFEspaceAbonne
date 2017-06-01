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
        $__internal_63868777a8bec0ee3e1a1324a53bc9239cd6d4b4b660d69aa453008086c94d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63868777a8bec0ee3e1a1324a53bc9239cd6d4b4b660d69aa453008086c94d4b->enter($__internal_63868777a8bec0ee3e1a1324a53bc9239cd6d4b4b660d69aa453008086c94d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_a4471a752155fc178be088bef7017a28620f09b98c33099d6aca0822f32b637e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4471a752155fc178be088bef7017a28620f09b98c33099d6aca0822f32b637e->enter($__internal_a4471a752155fc178be088bef7017a28620f09b98c33099d6aca0822f32b637e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63868777a8bec0ee3e1a1324a53bc9239cd6d4b4b660d69aa453008086c94d4b->leave($__internal_63868777a8bec0ee3e1a1324a53bc9239cd6d4b4b660d69aa453008086c94d4b_prof);

        
        $__internal_a4471a752155fc178be088bef7017a28620f09b98c33099d6aca0822f32b637e->leave($__internal_a4471a752155fc178be088bef7017a28620f09b98c33099d6aca0822f32b637e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_468246c7580edf470aa90268d6aad33c36482502c134561f40805842f7b1a4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468246c7580edf470aa90268d6aad33c36482502c134561f40805842f7b1a4fc->enter($__internal_468246c7580edf470aa90268d6aad33c36482502c134561f40805842f7b1a4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_65fd234603957958f70c1649ff740244c1a10204fe43d30b547dfe601c64d149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fd234603957958f70c1649ff740244c1a10204fe43d30b547dfe601c64d149->enter($__internal_65fd234603957958f70c1649ff740244c1a10204fe43d30b547dfe601c64d149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_65fd234603957958f70c1649ff740244c1a10204fe43d30b547dfe601c64d149->leave($__internal_65fd234603957958f70c1649ff740244c1a10204fe43d30b547dfe601c64d149_prof);

        
        $__internal_468246c7580edf470aa90268d6aad33c36482502c134561f40805842f7b1a4fc->leave($__internal_468246c7580edf470aa90268d6aad33c36482502c134561f40805842f7b1a4fc_prof);

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
