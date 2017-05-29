<?php

/* @ESFEspaceAbonne/back/mesParametresMAIL.html.twig */
class __TwigTemplate_85bd9f57d72998fff84f211d7844fb0b42742bf6cc156caeb69aeb1376a1e212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", 1);
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
        $__internal_e6f790eb0200977dc7db67da68963cbfedf2b2ec609b8570d68998dd63b728a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f790eb0200977dc7db67da68963cbfedf2b2ec609b8570d68998dd63b728a0->enter($__internal_e6f790eb0200977dc7db67da68963cbfedf2b2ec609b8570d68998dd63b728a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $__internal_c39bde9d5922d03c70e9007a8a5cf23981700cd8084b8cfb157d04fee56724f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39bde9d5922d03c70e9007a8a5cf23981700cd8084b8cfb157d04fee56724f3->enter($__internal_c39bde9d5922d03c70e9007a8a5cf23981700cd8084b8cfb157d04fee56724f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f790eb0200977dc7db67da68963cbfedf2b2ec609b8570d68998dd63b728a0->leave($__internal_e6f790eb0200977dc7db67da68963cbfedf2b2ec609b8570d68998dd63b728a0_prof);

        
        $__internal_c39bde9d5922d03c70e9007a8a5cf23981700cd8084b8cfb157d04fee56724f3->leave($__internal_c39bde9d5922d03c70e9007a8a5cf23981700cd8084b8cfb157d04fee56724f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8519421db4b49c353786572d2d1d44e9247d70c3bb3ff9e3eca2a555c5128899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8519421db4b49c353786572d2d1d44e9247d70c3bb3ff9e3eca2a555c5128899->enter($__internal_8519421db4b49c353786572d2d1d44e9247d70c3bb3ff9e3eca2a555c5128899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_089637b82f4a4d19b3ee1d1f7256fe2f58afdd007cd2145441adf26248724414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089637b82f4a4d19b3ee1d1f7256fe2f58afdd007cd2145441adf26248724414->enter($__internal_089637b82f4a4d19b3ee1d1f7256fe2f58afdd007cd2145441adf26248724414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_089637b82f4a4d19b3ee1d1f7256fe2f58afdd007cd2145441adf26248724414->leave($__internal_089637b82f4a4d19b3ee1d1f7256fe2f58afdd007cd2145441adf26248724414_prof);

        
        $__internal_8519421db4b49c353786572d2d1d44e9247d70c3bb3ff9e3eca2a555c5128899->leave($__internal_8519421db4b49c353786572d2d1d44e9247d70c3bb3ff9e3eca2a555c5128899_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_70b921576cbb1cfd15e41303e00ec4d213fc17dcaec10694a0818fe3f0369b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b921576cbb1cfd15e41303e00ec4d213fc17dcaec10694a0818fe3f0369b2c->enter($__internal_70b921576cbb1cfd15e41303e00ec4d213fc17dcaec10694a0818fe3f0369b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_780da14492ccf13212ddd1e930636cad9a8895510b28defe37667db39bf6e91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780da14492ccf13212ddd1e930636cad9a8895510b28defe37667db39bf6e91b->enter($__internal_780da14492ccf13212ddd1e930636cad9a8895510b28defe37667db39bf6e91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_780da14492ccf13212ddd1e930636cad9a8895510b28defe37667db39bf6e91b->leave($__internal_780da14492ccf13212ddd1e930636cad9a8895510b28defe37667db39bf6e91b_prof);

        
        $__internal_70b921576cbb1cfd15e41303e00ec4d213fc17dcaec10694a0818fe3f0369b2c->leave($__internal_70b921576cbb1cfd15e41303e00ec4d213fc17dcaec10694a0818fe3f0369b2c_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_9695355fe90dd0e47a9b8d7ed1012794760e567420d69b280ff23f677792f42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9695355fe90dd0e47a9b8d7ed1012794760e567420d69b280ff23f677792f42d->enter($__internal_9695355fe90dd0e47a9b8d7ed1012794760e567420d69b280ff23f677792f42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e2912506dbee1e32e4d986f1c45591fbac2a6b32924e69a18228172a7c60721f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2912506dbee1e32e4d986f1c45591fbac2a6b32924e69a18228172a7c60721f->enter($__internal_e2912506dbee1e32e4d986f1c45591fbac2a6b32924e69a18228172a7c60721f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 


<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
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
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 31
        echo "    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>

";
        
        $__internal_e2912506dbee1e32e4d986f1c45591fbac2a6b32924e69a18228172a7c60721f->leave($__internal_e2912506dbee1e32e4d986f1c45591fbac2a6b32924e69a18228172a7c60721f_prof);

        
        $__internal_9695355fe90dd0e47a9b8d7ed1012794760e567420d69b280ff23f677792f42d->leave($__internal_9695355fe90dd0e47a9b8d7ed1012794760e567420d69b280ff23f677792f42d_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  130 => 31,  125 => 28,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'profile.edit.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>
</div>

{% endblock %}", "@ESFEspaceAbonne/back/mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mesParametresMAIL.html.twig");
    }
}
