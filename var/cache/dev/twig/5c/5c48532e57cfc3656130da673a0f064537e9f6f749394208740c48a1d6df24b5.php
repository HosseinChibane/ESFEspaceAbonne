<?php

/* ESFEspaceAbonneBundle:Default:mesParametresMDP.html.twig */
class __TwigTemplate_c3541cc946f680f7c841d076ab4c3018ecfef1ff2827750a2396927d7a61d0dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mesParametresMDP.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6413ae0a8a5e5c318c2bdf93dcf5a6e429360582cf7cb520cfe275aacf59bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6413ae0a8a5e5c318c2bdf93dcf5a6e429360582cf7cb520cfe275aacf59bc8->enter($__internal_a6413ae0a8a5e5c318c2bdf93dcf5a6e429360582cf7cb520cfe275aacf59bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesParametresMDP.html.twig"));

        $__internal_f1e53878432abb0a11031dc91d09216e147e8dafd3b14b3bcd95394fb8ec320f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e53878432abb0a11031dc91d09216e147e8dafd3b14b3bcd95394fb8ec320f->enter($__internal_f1e53878432abb0a11031dc91d09216e147e8dafd3b14b3bcd95394fb8ec320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6413ae0a8a5e5c318c2bdf93dcf5a6e429360582cf7cb520cfe275aacf59bc8->leave($__internal_a6413ae0a8a5e5c318c2bdf93dcf5a6e429360582cf7cb520cfe275aacf59bc8_prof);

        
        $__internal_f1e53878432abb0a11031dc91d09216e147e8dafd3b14b3bcd95394fb8ec320f->leave($__internal_f1e53878432abb0a11031dc91d09216e147e8dafd3b14b3bcd95394fb8ec320f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fabe17aa7426af1ff7ae180ec19b1646bed720f0760061b148386240f55ec7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fabe17aa7426af1ff7ae180ec19b1646bed720f0760061b148386240f55ec7c->enter($__internal_7fabe17aa7426af1ff7ae180ec19b1646bed720f0760061b148386240f55ec7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70f2a35546b21f0df0d31e43c3602151e01a07ea9e000c16066526cd3c7479d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f2a35546b21f0df0d31e43c3602151e01a07ea9e000c16066526cd3c7479d4->enter($__internal_70f2a35546b21f0df0d31e43c3602151e01a07ea9e000c16066526cd3c7479d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_70f2a35546b21f0df0d31e43c3602151e01a07ea9e000c16066526cd3c7479d4->leave($__internal_70f2a35546b21f0df0d31e43c3602151e01a07ea9e000c16066526cd3c7479d4_prof);

        
        $__internal_7fabe17aa7426af1ff7ae180ec19b1646bed720f0760061b148386240f55ec7c->leave($__internal_7fabe17aa7426af1ff7ae180ec19b1646bed720f0760061b148386240f55ec7c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d25af29dc1621614eba4058e88e8ddcdcc348860e7487db306a5b7d9c48438eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25af29dc1621614eba4058e88e8ddcdcc348860e7487db306a5b7d9c48438eb->enter($__internal_d25af29dc1621614eba4058e88e8ddcdcc348860e7487db306a5b7d9c48438eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_d24211f7a8e10039ab2165b5f8d713346351dff5169fbe07f54ddb49f25c7d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24211f7a8e10039ab2165b5f8d713346351dff5169fbe07f54ddb49f25c7d86->enter($__internal_d24211f7a8e10039ab2165b5f8d713346351dff5169fbe07f54ddb49f25c7d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_d24211f7a8e10039ab2165b5f8d713346351dff5169fbe07f54ddb49f25c7d86->leave($__internal_d24211f7a8e10039ab2165b5f8d713346351dff5169fbe07f54ddb49f25c7d86_prof);

        
        $__internal_d25af29dc1621614eba4058e88e8ddcdcc348860e7487db306a5b7d9c48438eb->leave($__internal_d25af29dc1621614eba4058e88e8ddcdcc348860e7487db306a5b7d9c48438eb_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_54fdd84e3d890aad4e2086f62617fbb86a5a5aefc65931c5027664a664b7d6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fdd84e3d890aad4e2086f62617fbb86a5a5aefc65931c5027664a664b7d6bc->enter($__internal_54fdd84e3d890aad4e2086f62617fbb86a5a5aefc65931c5027664a664b7d6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a018c407683a0f8b811119445b11db6c66b12313cbe1e504342ad8155295c35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a018c407683a0f8b811119445b11db6c66b12313cbe1e504342ad8155295c35d->enter($__internal_a018c407683a0f8b811119445b11db6c66b12313cbe1e504342ad8155295c35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
 

<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
     ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 33
        echo "    </div>
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>            
</div>      
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_a018c407683a0f8b811119445b11db6c66b12313cbe1e504342ad8155295c35d->leave($__internal_a018c407683a0f8b811119445b11db6c66b12313cbe1e504342ad8155295c35d_prof);

        
        $__internal_54fdd84e3d890aad4e2086f62617fbb86a5a5aefc65931c5027664a664b7d6bc->leave($__internal_54fdd84e3d890aad4e2086f62617fbb86a5a5aefc65931c5027664a664b7d6bc_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mesParametresMDP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  138 => 34,  135 => 33,  130 => 30,  126 => 29,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block Content %} 
 

<!-- Mes Parametres -->
{{ form_start(form) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
     {{ form_widget(form) }}
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'change_password.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>            
</div>      
{{ form_end(form) }}
</div>
{% endblock %}", "ESFEspaceAbonneBundle:Default:mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mesParametresMDP.html.twig");
    }
}
